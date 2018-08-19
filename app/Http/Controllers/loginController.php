<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function login(Request $kiriman){
      $data=login::where('username',$kiriman->username)->where('password',$kiriman->password)->get();
      if (count($data)>0) {
        Auth::guard('staffs')->LoginUsingId($data[0]['id']);
        return redirect('/schedule');
      }
      else {
        return 'Login Gagal';
      }
    }

    function keluar(){
      if (Auth::guard('staffs')->check()) {
      Auth::guard('staffs')->logout();
      }
      return view('/pages/dashboard/index');
    }
}
