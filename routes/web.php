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

Route::resource('user','UserController');
Route::get('mahasiswa',function(){
    return view('pages.college');
});

// INI UNTUK HALAMAN LOGIN ADMIN
Route::get('/loginadmin' , function()
{

    return view('pages.user.admin');

});

Route::resource('siswa' , 'DataSiswaController');
Route::get('/getdata/{id}/post' , 'DataSiswaController@show');
//-----------------------------------------------------------

//PROSES DATA SISWA


//-----------------------------------------------------------
