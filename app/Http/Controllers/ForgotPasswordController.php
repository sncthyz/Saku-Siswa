<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function main(Request $request)
    {
        return view('pages.auth.forgotpassword');
    }

    public function SendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $response = Password::sendResetLink($request->only('email'));
        return $response == Password::RESET_LINK_SENT ? back()->with('status', __($response)) : back()->withErrors(['email' => __($response)]);
    }

    public function ResetEmail(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $status = Password::reset($request->only('email', 'password', 'confirm_password', 'token'), function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        });
        return $status == Password::PASSWORD_RESET ? redirect('/login')->with('status', __($status)) : back()->withErrors(['email' => __($status)]);
    }
}
