<?php

namespace App\Http\Controllers\Staf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function __construct()
    {
        $this->middleware('guest:staf')->except('logout');
    }

    public function login(Request $request){
      $this->validate($request, [
        'username'   => 'required'
      ]);
      $credentials = $request->only(['username','password']);
      $remember = ($request->has('remember'))? true:false;
      if (Auth::guard('staf')->attempt($credentials, $remember)) {
        loggedIn(Auth::user());
      }else {
        return redirect()->back()->withError("User with that credential couldn't be found!");
      }
    }

    public function loggedIn($student){
      return redirect()->route('staff.dashboard');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect('/staf/login');
    }
}
