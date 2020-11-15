<?php

namespace App\Http\Controllers\User\transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\transaction\AddTransactionRequest;
use Illuminate\Support\Facades\Auth;
use App\Model\transaction;

class TransactionController extends Controller
{
    public function index()
    {
        return view('user.transaction.add');
    }

    public function add(AddTransactionRequest $request)
    {
      $data=$request->all;
      if($request>'balance')
      {
          return redirect()->route('transaction.transaction')->with('error','The value entered is greater than the existing quantity');
      }
      else
      {
          $data['user_id']=Auth::user()->id;
          $data=transaction::Create($data);
          return redirect()->route('home.index')->with('success', 'Create Transaction Successfully');
      }
    }
}
