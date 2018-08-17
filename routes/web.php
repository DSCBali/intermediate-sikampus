<?php


use App\Course;
use App\Lecture;
use App\Schedule;
use App\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.dashboard');
});


Route::get('mahasiswa',function(){
    return view('pages.college');
});

// INI UNTUK HALAMAN LOGIN ADMIN
Route::get('/loginadmin' , function()
{

    return view('pages.user.admin');

});

//-----------------------------------------------------------
Route::resource('user','UserController');
Route::resource('siswa' , 'DataSiswaController');
Route::get('/getdata/{id}/post' , 'DataSiswaController@show');
Route::post('/siswa/{id}/destroy' , 'DataSiswaController@destroy');
//-----------------------------------------------------------

//AUTH

Route::get('/home_user', 'LoginController@index');
Route::get('/login', 'LoginController@login');
Route::post('/loginPost', 'LoginController@loginPost');
Route::get('/register', 'LoginController@register');
Route::post('/registerPost', 'LoginController@registerPost');
Route::get('/logout', 'LoginController@logout');

//-----------------------------------------------------------
