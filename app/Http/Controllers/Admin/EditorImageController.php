<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EditorImageController extends Controller
{
    public function upload(Request $request)
    {
        // Editor.js requires pure JSON response
        if (!$request->hasFile('image')) {
            return response()->json([
                'success' => 0,
                'message' => 'No image uploaded'
            ]);
        }

        $file = $request->file('image');

        // Validate image type
        $allowed = ['jpg', 'jpeg', 'png', 'webp'];
        $extension = strtolower($file->getClientOriginalExtension());

        if (!in_array($extension, $allowed)) {
            return response()->json([
                'success' => 0,
                'message' => 'Invalid image format'
            ]);
        }

        // Generate unique file name
        $filename = 'editor_' . time() . '_' . Str::random(8) . '.' . $extension;

        /*
         |--------------------------------------------------------------------------
         | IMPORTANT (No SSH / No storage:link)
         |--------------------------------------------------------------------------
         | We save the image DIRECTLY inside:
         | public_html/storage/blogs/editor
         |
         | Browser reads from /storage/...
         | Laravel does NOT need symlink
         |--------------------------------------------------------------------------
         */

        $destination = public_path('storage/blogs/editor');

        // Create folder if not exists
        if (!is_dir($destination)) {
            mkdir($destination, 0755, true);
        }

        // Move image
        $file->move($destination, $filename);

        // REQUIRED Editor.js response format
        return response()->json([
            'success' => 1,
            'file' => [
                'url' => asset('storage/blogs/editor/' . $filename)
            ]
        ]);
    }
}
