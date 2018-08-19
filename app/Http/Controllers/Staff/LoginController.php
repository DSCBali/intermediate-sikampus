<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    use AuthenticatesUsers;

    protected $redirectTo = 'staff/dashboard';

    public function __construct()
    {
        $this->middleware('guest:staff')->except('logout');
    }

    public function showLoginForm()
    {
        return view('staff-auth.login');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('staff.login');
    }

    protected function guard(){
      return Auth::guard('staff');
    }

    public function username()
    {
        return 'username';
    }
}
