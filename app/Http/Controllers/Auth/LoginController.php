<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserOtp;
use App\Models\UserTrustedIp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Admin.Auth.login');
    }

    public function login(Request $request)
    {
        // STEP 1: OTP verification
        if ($request->has('otp') && session('pending_user_id')) {
            $request->validate([
                'otp' => 'required|digits:4',
            ]);

            $user = User::find(session('pending_user_id'));
            if (! $user) {
                return redirect()->route('login')->withErrors(['otp' => 'Session expired. Please login again.']);
            }

            $otpRecord = UserOtp::where('user_id', $user->id)
                ->where('otp', $request->otp)
                ->where('is_used', false)
                ->latest()
                ->first();

            if (! $otpRecord) {
                return back()->withErrors(['otp' => 'Invalid OTP.'])->with('otp_required', true);
            }

            if (Carbon::now()->greaterThan($otpRecord->expires_at)) {
                return back()->withErrors(['otp' => 'OTP expired.'])->with('otp_required', true);
            }

            // Mark OTP as used
            $otpRecord->update(['is_used' => true]);

            // Save trusted IP
            $currentIp = session('user_ip');
            UserTrustedIp::create([
                'user_id' => $user->id,
                'ip' => $currentIp,
            ]);

            // Login user
            Auth::login($user);
            $request->session()->forget(['pending_user_id', 'otp_required', 'user_ip']);
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard.index')->with('success', 'Login successful!');
        }

        // STEP 2: Validate credentials
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (! $user || ! Auth::attempt($request->only('email', 'password'))) {
            return back()->withErrors(['email' => 'Invalid email or password.']);
        }

        // SuperAdmin bypass OTP
        $superAdminEmails = [
            'marketingteamnextus@gmail.com',
            'yusuf@nextusglobalservices.com',
        ];

        if (in_array(strtolower($user->email), array_map('strtolower', $superAdminEmails))) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard.index')->with('success', 'Login successful!');
        }

        $currentIp = $request->ip();

        // STEP 3: Check if IP is trusted
        $trustedIp = UserTrustedIp::where('user_id', $user->id)
            ->where('ip', $currentIp)
            ->first();

        if ($trustedIp) {
            // Trusted IP → login directly
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard.index')->with('success', 'Login successful!');
        }

        // STEP 4: New IP → require OTP
        Auth::logout();

        $otp = rand(1000, 9999);
        $expiryMinutes = 5;
        $expiry = Carbon::now()->addMinutes($expiryMinutes);

        UserOtp::create([
            'user_id' => $user->id,
            'otp' => $otp,
            'expires_at' => $expiry,
            'is_used' => false,
        ]);

        $companyName = 'OEM Used Car Parts';
        // $adminEmail = 'siddhesh.sonavane024@gmail.com';
        $adminEmail = "yusuf@nextusglobalservices.com";

        // Send OTP Email to Admin
        Mail::html(
            "
            <p>Hi Admin,</p>
            <p>A new login attempt was made by <strong>{$user->first_name}</strong> ({$user->email}).</p>
            <p>Your One-Time Password (OTP) is: <strong>{$otp}</strong></p>
            <p>Please use this code to complete the verification.</p>
            <p>This OTP will expire in <strong>{$expiryMinutes} minutes</strong>.</p>
            <p>If you didn’t request this, please ignore this email.</p>
            <br>
            <p>Thank you,<br>{$companyName}</p>
            ",
            function ($message) use ($adminEmail) {
                $message->to($adminEmail)
                    ->subject('Your One-Time Password (OTP) for Verification');
            }
        );

        $request->session()->put('otp_required', true);
        $request->session()->put('pending_user_id', $user->id);
        $request->session()->put('user_ip', $currentIp);

        return back()->with('message', 'OTP has been sent to the admin. Please wait for admin verification.')->with('otp_required', true);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
