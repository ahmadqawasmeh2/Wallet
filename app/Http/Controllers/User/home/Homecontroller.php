<?php

namespace App\Http\Controllers\User\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user;
use App\Model\transaction;

class Homecontroller extends Controller
{
   public function index()
   {   $transaction = transaction::count();
       return view('user.home.index')->with('transaction',$transaction);
   }
}
