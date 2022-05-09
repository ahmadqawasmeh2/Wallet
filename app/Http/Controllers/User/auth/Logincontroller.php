<?php

namespace App\Http\Controllers\User\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\auth\LoginRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function index()
    {
        return view('user.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email','password');
        // dd($credentials,$request->all(),Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home.home');
        }
        return redirect('/')->with('error', 'Somthing Error Email Or Password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
