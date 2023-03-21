<?php

namespace App\Http\Controllers\Admin;

use App\Mail\WebsiteMail;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::guard('admin')->attempt($credential)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('error', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function forget_password()
    {
        return view('admin.forget-password');
    }

    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $admin_data = Admin::where('email', $request->email)->first();

        if (!$admin_data) {
            return redirect()->back()->with('message', 'email addess not found');
        }

        $token = hash('sha256', time());
        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/password/verify/' . $request->email . '/' . $token);

        $subject = 'Reset Password';
        $message = "Reset your password with this following ";
        $message .= "<a href='" . $reset_link . "'> link</a>";

        Mail::to($request->email)->send(new WebsiteMail($subject, $message));

        return redirect()->route('admin.login')->with('success', 'Please check your email for password reset');
    }

    public function verify_password($email, $token)
    {
        $admin_data = Admin::where('token', $token)->where('email', $email)->first();

        if (!$admin_data) {
            return redirect()->route('admin.login');
        }

        $admin_data->token = '';
        $admin_data->update();

        return view('admin.reset-password');
    }
}
