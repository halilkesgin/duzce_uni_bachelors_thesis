<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Websitemail;
use App\Models\Page;
use Hash;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        $page_data = Page::first();
        return view('front.login', compact('page_data'));
    }

    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => ERROR_EMAIL_REQUIRED,
            'email.email' => ERROR_EMAIL_VALID,
            'password.required' => ERROR_PASSWORD_REQUIRED
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

    public function forget_password()
    {
        return view('front.forget_password');
    }

    public function forget_password_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ],[
            'email.required' => ERROR_EMAIL_REQUIRED,
            'email.email' => ERROR_EMAIL_VALID
        ]);

        $reset_link = url('reset-password/'.$token.'/'.$request->email);
        $subject = 'Reset Password';
        $message = 'Please click on the following link: <br>';
        $message .= '<a href="'.$reset_link.'">Click here</a>';

        \Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->route('login')->with('success',SUCCESS_FORGET_PASSWORD);

    }

    public function reset_password($token,$email)
    {
        return view('front.reset_password', compact('token','email'));

    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'retype_password' => 'required|same:password'
        ],[
            'password.required' => ERROR_PASSWORD_REQUIRED,
            'retype_password.required' => ERROR_RETYPE_PASSWORD_REQUIRED,
            'retype_password.same' => ERROR_RETYPE_PASSWORD_SAME,
        ]);

        return redirect()->route('login')->with('success', SUCCESS_RESET_PASSWORD);

    }
}
