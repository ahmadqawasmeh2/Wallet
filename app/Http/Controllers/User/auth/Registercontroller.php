<?php

namespace App\Http\Controllers\User\auth;

use App\Http\Controllers\Controller;
use App\Model\user;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\auth\RegisterRequest;
use Intervention\Image\ImageManagerStatic as Image;

class Registercontroller extends Controller
{
    public function page_register()
    {
        return view('user.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        if($request->hasFile('image')) {

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save(public_path('imageuser'.$filename));
            $image = 'imageuser'.$filename;

            $user = new user;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->phonenumber = $request['phonenumber'];
            $user->birthdate = $request['birthdate'];
            $user->password = Hash::make($request['password']);
            $user->image = $image;
            $user->save();
            auth()->login($user);
            return redirect()->route('home.home');
    }
}
}
