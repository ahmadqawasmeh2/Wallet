<?php

namespace App\Http\Controllers\User\categroy;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\categroy\AddCategroyRequest;
use Illuminate\Support\Facades\Auth;
use App\Model\UserCategory;

class Categroycontroller extends Controller
{
    public function index()
    {
        return view('user.categroy.addcategroy');
    }

    public function addcategroy(AddCategroyRequest $request)
    {
       $data=$request->all;
       $data['user_id']=Auth::user()->id;
       $data['name']=$request->name;
       $data['income']=$request->income;
       $data['expenses']=$request->expenses;
       $data = UserCategory::Create($data);
       return redirect()->route('home.home')->with('success', 'Create Categroy Successfully');
    }
}
