<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Mail\Thankyou;
use App\Models\AutoEnquiry;
use App\Models\Blog;
use App\Models\BlogVisitor;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 'ACTIVE')
            ->withCount('visitors')
            ->orderBy('publish_date', 'desc')
            ->paginate(6);

        return view('Frontend.blogs', compact('blogs'));
    }

    public function blog_details(Request $request, $slug)
{
    $blog = Blog::withCount('visitors')
        ->where('slug', $slug) 
        ->where('status', 'ACTIVE')
        ->firstOrFail();

    // Track unique visitor by IP
    BlogVisitor::firstOrCreate([
        'blog_id' => $blog->id,
        'ip_address' => $request->ip(),
    ]);

    // Decode Editor.js content
    $description = json_decode($blog->description, true);
    $htmlContent = '';

    if (!empty($description['blocks']) && is_array($description['blocks'])) {
        foreach ($description['blocks'] as $block) {
            switch ($block['type']) {
                case 'header':
                    $level = $block['data']['level'] ?? 2;
                    $text = $block['data']['text'] ?? '';
                    $htmlContent .= "<h{$level}>{$text}</h{$level}>";
                    break;

                case 'paragraph':
                    $text = $block['data']['text'] ?? '';
                    $htmlContent .= "<p>{$text}</p>";
                    break;

                case 'delimiter':
                    $htmlContent .= '<hr>';
                    break;

                case 'image':
                    if (!empty($block['data']['file']['url'])) {
                        $url = htmlspecialchars($block['data']['file']['url']);
                        $caption = $block['data']['caption'] ?? '';
                        $align = $block['data']['alignment'] ?? 'center';
                        $htmlContent .= "<div class='image-container {$align}'><img src='{$url}' alt='" . strip_tags($caption) . "'>";
                        if ($caption) $htmlContent .= "<p class='caption'>{$caption}</p>";
                        $htmlContent .= "</div>";
                    }
                    break;

                case 'list':
                    $items = $block['data']['items'] ?? [];
                    $style = $block['data']['style'] ?? 'unordered';
                    if ($style === 'ordered') {
                        $htmlContent .= '<ol>';
                        foreach ($items as $item) {
                            $content = $item['content'] ?? '';
                            $htmlContent .= "<li>{$content}</li>";
                        }
                        $htmlContent .= '</ol>';
                    } elseif ($style === 'checklist') {
                        $htmlContent .= "<ul class='checklist'>";
                        foreach ($items as $item) {
                            $content = $item['content'] ?? '';
                            $checked = !empty($item['meta']['checked']) ? 'checked' : '';
                            $htmlContent .= "<li><input type='checkbox' disabled {$checked}> {$content}</li>";
                        }
                        $htmlContent .= '</ul>';
                    } else {
                        $htmlContent .= '<ul>';
                        foreach ($items as $item) {
                            $content = $item['content'] ?? '';
                            $htmlContent .= "<li>{$content}</li>";
                        }
                        $htmlContent .= '</ul>';
                    }
                    break;

                case 'table':
                    if (!empty($block['data']['content']) && is_array($block['data']['content'])) {
                        $htmlContent .= '<table class="editor-table">';
                        foreach ($block['data']['content'] as $row) {
                            $htmlContent .= '<tr>';
                            foreach ($row as $cell) {
                                $htmlContent .= "<td>{$cell}</td>";
                            }
                            $htmlContent .= '</tr>';
                        }
                        $htmlContent .= '</table>';
                    }
                    break;

                case 'linkTool':
                    if (!empty($block['data']['link'])) {
                        $href = htmlspecialchars($block['data']['link']);
                        $text = $block['data']['meta']['title'] ?? $href;
                        $htmlContent .= "<a href='{$href}' target='_blank'>{$text}</a>";
                    }
                    break;
            }
        }
    }

    // Extract FAQs from content
    preg_match_all(
        '/<h([1-6])[^>]*>\s*Q[.:]?\s*(.*?)<\/h\1>[\s\S]*?<p[^>]*>(.*?)<\/p>/i',
        $htmlContent,
        $matches,
        PREG_SET_ORDER
    );

    $faqs = [];
    foreach ($matches as $match) {
        $question = trim(strip_tags($match[2] ?? ''));
        $answer = trim(strip_tags($match[3] ?? ''));
        if ($question && $answer) {
            $faqs[] = ['question' => $question, 'answer' => $answer];
        }
    }

    // Attach extracted FAQs to blog model
    $blog->faqs = $faqs;

    // Get latest blogs
    $latestBlogs = Blog::where('status', 'ACTIVE')
        ->where('slug', '!=', $slug)
        ->orderBy('publish_date', 'desc')
        ->take(5)
        ->get();

    return view('Frontend.blog-details', compact('blog', 'htmlContent', 'latestBlogs'));
}


    public function contactEnquiry(Request $request)
    {
        $rules = [
            'full_name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'g-recaptcha-response' => 'required',
        ];

        $messages = [
            'full_name.required' => 'Your Full Name is required',
            'subject.required' => 'Your Subject is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email should be a valid email',
            'mobile.required' => 'The mobile number field is required.',
            'mobile.digits' => 'The mobile number must be exactly 10 digits.',
            'g-recaptcha-response.required' => 'Please complete the captcha.',
        ];

        $request->validate($rules, $messages);

        // Validate inputs
        $request->validate($rules, $messages);

        // Verify Google reCAPTCHA
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $responseBody = $response->json();

        if (! isset($responseBody['success']) || ! $responseBody['success']) {
            return response()->json([
                'status' => 'error',
                'message' => 'Captcha verification failed. Please try again.',
            ], 422);
        }

        // Save enquiry as before...
        $enquiry = new Enquiry;
        $enquiry->full_name = $request->full_name;
        $enquiry->subject = $request->subject;
        $enquiry->mobile = $request->mobile;
        $enquiry->email = $request->email;
        $enquiry->message = $request->message;
        $enquiry->save();

        Mail::to('info@oemusedcarpart.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));

        return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
    }

    public function autoEnquiry(Request $request)
    {
        // Validation rules — remove custom captcha validation, add 'g-recaptcha-response' instead
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'zip' => 'required',
            'vehicle_model' => 'required',
            'vehicle_year' => 'required',
            'make' => 'required',
            'vehicle_part' => 'required',
            'g-recaptcha-response' => 'required',  // Add reCAPTCHA validation
        ];

        $messages = [
            'full_name.required' => 'Your Full Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email should be a valid email',
            'mobile.required' => 'The mobile number field is required.',
            'mobile.digits' => 'The mobile number must be exactly 10 digits.',
            'zip.required' => 'Zip is required',
            'vehicle_model.required' => 'Vehicle Model is required',
            'vehicle_year.required' => 'Vehicle Year is required',
            'vehicle_part.required' => 'Part Select is required',
            'make.required' => 'Make is required',
            'g-recaptcha-response.required' => 'Please complete the captcha.',  // reCAPTCHA error message
        ];

        // Validate inputs
        $request->validate($rules, $messages);

        // Verify Google reCAPTCHA
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $responseBody = $response->json();

        if (! isset($responseBody['success']) || ! $responseBody['success']) {
            return response()->json([
                'status' => 'error',
                'message' => 'Captcha verification failed. Please try again.',
            ], 422);
        }

        // Save enquiry
        $enquiry = new AutoEnquiry;
        $enquiry->full_name = $request->full_name;
        $enquiry->mobile = $request->mobile;
        $enquiry->email = $request->email;
        $enquiry->zip = $request->zip;
        $enquiry->vehicle_year = $request->vehicle_year;
        $enquiry->vehicle_model = $request->vehicle_model;
        $enquiry->vehicle_part = $request->vehicle_part; // hidden or user input
        $enquiry->make = $request->make;
        $enquiry->save();

        // Send mails
        Mail::to('info@oemusedcarpart.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));

        return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
    }

    public function modelEnquiry(Request $request)
    {
        // Validation rules with Google reCAPTCHA instead of custom captcha
        $rules = [
            'full_name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'g-recaptcha-response' => 'required',  // Add reCAPTCHA validation
        ];

        $messages = [
            'full_name.required' => 'Your Full Name is required',
            'subject.required' => 'Your Subject is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email should be a valid email',
            'mobile.required' => 'The mobile number field is required.',
            'mobile.digits' => 'The mobile number must be exactly 10 digits.',
            'g-recaptcha-response.required' => 'Please complete the captcha.',  // reCAPTCHA error message
        ];

        $request->validate($rules, $messages);

        // Verify Google reCAPTCHA
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $responseBody = $response->json();

        if (! isset($responseBody['success']) || ! $responseBody['success']) {
            return response()->json([
                'status' => 'error',
                'message' => 'Captcha verification failed. Please try again.',
            ], 422);
        }

        // Save enquiry
        $enquiry = new Enquiry;
        $enquiry->full_name = $request->full_name;
        $enquiry->subject = $request->subject;
        $enquiry->mobile = $request->mobile;
        $enquiry->email = $request->email;
        $enquiry->message = $request->message;
        $enquiry->save();

        Mail::to('info@oemusedcarpart.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));

        return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
    }


    public function leadEnquiry(Request $request)
    {
        // Validation rules — remove custom captcha validation, add 'g-recaptcha-response' instead
        
        $rules = [
            'full_name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'zip' => 'required',
            'vehicle_model' => 'required',
            'vehicle_year' => 'required',
            'make' => 'required',
        ];

        $messages = [
            'full_name.required' => 'Your Full Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email should be a valid email',
            'mobile.required' => 'The mobile number field is required.',
            'mobile.digits' => 'The mobile number must be exactly 10 digits.',
            'zip.required' => 'Zip is required',
            'vehicle_model.required' => 'Vehicle Model is required',
            'vehicle_year.required' => 'Vehicle Year is required',
            'make.required' => 'Make is required',
        ];

        // Validate inputs
        $request->validate($rules, $messages);


        // Save enquiry
        $enquiry = new AutoEnquiry;
        $enquiry->full_name = $request->full_name;
        $enquiry->mobile = $request->mobile;
        $enquiry->email = $request->email;
        $enquiry->zip = $request->zip;
        $enquiry->vehicle_year = $request->vehicle_year;
        $enquiry->vehicle_model = $request->vehicle_model;
        $enquiry->vehicle_part = $request->vehicle_part; // hidden or user input
        $enquiry->make = $request->make;
        $enquiry->save();
        // dd($enquiry);
        // Send mails
        Mail::to('info@oemusedcarpart.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));

        return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
    }
}
