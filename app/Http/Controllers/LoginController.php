<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


use App\Staff;
use Validator;

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
 public function loginPost(Request $request)
 {
     $this->validate($request,
         ['email' => 'required'],
         ['password' => 'required']
     );

     $emailhash = $request->email;
     $passwordhash = $request->password;
     $emailnormal = $request->input('email');
     $passwordnormal = $request->input('password');

     $datanormal = DB::table('Staff')->where(['email' => $emailnormal, 'password' => $passwordnormal])->first();
     $datahash = Staff::where('email',$emailhash)->first();

     if(count($datahash) > 0)//apakah email tersebut ada atau tidak
     {
         // BAGIAN CHECK DATA YANG TIDAK DI HASH
         if(count($datanormal) > 0)
         {
             if(count($datanormal) == 0)
             {
                 return redirect('login')->with('alert' , 'Maaf Email Tidak Ada');
             }
             if ($emailnormal == $datanormal->email AND $passwordnormal == $datanormal->password) {


                 Session::put('login', 'Selamat anda berhasil login');
                 return redirect('/home_user')->with('alert', 'Anda Berhasil Login');


             }

         }
         //---- BAGIAN JIKA ADA DATA YANG DI HASH
         if(Hash::check($passwordhash ,$datahash->password))
         {
             Session::put('email',$datahash->email);
             Session::put('login',TRUE);
             return redirect('home_user');
         }
         else
             {
             return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($passwordhash,$datahash->password));
         }
     }
     else
         {
         return redirect('login')->with('alert','Password atau Email, Salah!');
         }
 }

 public function logout(){
     Session::flush();
     return redirect('login')->with('alert','Kamu sudah logout');
 }


// public function register(Request $request){
//     return view('pages.user.adminregrister');
// }
// public function registerPost(Request $request){
//
//     $this->validate($request, [
//         'name' => 'required|min:4',
//         'email' => 'required|min:4|email|unique:users',
//         'password' => 'required',
//         'confirmation' => 'required|same:password',
//     ]);
//
//     $data =  new Staff();
//     $data->name = $request->name;
//     $data->email = $request->email;
//     $data->password = bcrypt($request->password);
//     $data->dob = $request->dob;
//     $data->gender = $request->gender;
//     $data->phone = $request->phone;
//     $data->save();
//     return view('pages.user.admin')->with('alert-success','Kamu berhasil Register');
// }

}
