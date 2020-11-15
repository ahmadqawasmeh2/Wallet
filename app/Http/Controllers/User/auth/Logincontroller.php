<?php

namespace App\Http\Controllers\User\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function index()
    {
        return view('user.auth.login');
    }
    public function login(LoginRequest $request)
    {
     
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) 
        {
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
