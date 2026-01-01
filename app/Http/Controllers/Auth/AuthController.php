<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('pages.homepage.main');
    }

    public function showRegister()
    {
        return view('pages.auth.register');
    }

    public function Register(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
          'password' => 'required|string|min:8',
            'confirm_password' => 'required|same:password',
        ], [
        'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',
    ]);

        $user = $request->except('confirm_password');
        $user['password'] = bcrypt($user['password']);
        User::create($user);
        return view('pages.auth.login');
    }

    public function showLogin()
    {
        if (Auth::check()) {
            return view('pages.dashboard.dashboard');
        }
        return view('pages.auth.login');
    }

    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('/dashboard');
        } else {
            return back()->withErrors('username atau password salah');
        }
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return view('pages.homepage.main');
    }
}
