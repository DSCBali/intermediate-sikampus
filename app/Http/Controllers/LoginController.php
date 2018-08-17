<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Staff;

class LoginController extends Controller
{
  //
 public function index(){
     if(!Session::get('login')){
         return view('pages.user.admin')->with('alert','Kamu harus login dulu');
     }
     else{
         return redirect('/user');
     }
 }
 public function login(){
     return view('pages.user.admin');
 }
 public function loginPost(Request $request){
     $email = $request->email;
     $password = $request->password;
     $data = Staff::where('email',$email)->first();
     if(count($data) > 0){ //apakah email tersebut ada atau tidak
         if(Hash::check($password,$data->password)){
             Session::put('name',$data->name);
             Session::put('email',$data->email);
             Session::put('login',TRUE);
             return redirect('home_user');
         }
         else{
             return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
         }
     }
     else{
         return redirect('login')->with('alert','Password atau Email, Salah!');
     }
 }
 public function logout(){
     Session::flush();
     return redirect('login')->with('alert','Kamu sudah logout');
 }
 public function register(Request $request){
     return view('pages.user.adminregrister');
 }
 public function registerPost(Request $request){
     $this->validate($request, [
         'name' => 'required|min:4',
         'email' => 'required|min:4|email|unique:users',
         'password' => 'required',
         'confirmation' => 'required|same:password',
     ]);
     $data =  new Staff();
     $data->name = $request->name;
     $data->email = $request->email;
     $data->password = bcrypt($request->password);
     $data->dob = $request->dob;
     $data->gender = $request->gender;
     $data->phone = $request->phone;
     $data->save();
     return view('pages.user.admin')->with('alert-success','Kamu berhasil Register');
 }

}
