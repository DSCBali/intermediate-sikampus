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
// PAGE ROUTE
Route::get('/',function(){return view('pages.dashboard');});
Route::get('mahasiswa',function(){return view('pages.college');});
// INI UNTUK HALAMAN LOGIN ADMIN
Route::get('/loginadmin',function(){return view('pages.user.admin');});

//AUTH LOGIN ADMIN
Route::get('/home_user', 'LoginController@index');
Route::get('/login', 'LoginController@login');
Route::post('/loginPost', 'LoginController@loginPost');
// Route::get('/register', 'LoginController@register');
// Route::post('/registerPost', 'LoginController@registerPost');
Route::get('/logout', 'LoginController@logout');
//-----------------------------------------------------------

//UNTUK DATA SISWA PAGE status
Route::resource('user','UserController');
Route::resource('siswa' , 'DataSiswaController');
// Route::get('/getdata/{id}/post' , 'DataSiswaController@show');
//Route::get('/siswa/{id}/destroy' , 'DataSiswaController@destroy');
//Route::get('/siswa/{id}/edit' , 'UserController@edit');
//-----------------------------------------------------------



//PAGE DOSEN
Route::resource('user2' , 'DosenController');
Route::resource('dosen' , 'DataDosenController');
Route::get('/dosen/{id}/destroy' , 'DataDosenController@destroy');
Route::get('/dosen/{id}/edit' , 'DosenController@edit');
//-----------------------------------------------------------

//PAGE jadwal
Route::resource('matkul' , 'MatkulController');
Route::resource('JadwalMatkul' , 'JadwalMatkulController');
Route::get('/jadwal/{id}/destroy' , 'JadwalMatkulController@destroy');
Route::get('/jadwal/{id}/edit' , 'MatkulController@edit');
//-----------------------------------------------------------

//Page Kelas
Route::resource('kelas' , 'KelasController');
Route::resource('datakelas' , 'DataKelasController');
Route::get('/data/{id}/destroy' , 'DataKelasController@destroy');
Route::get('/data/{id}/edit' , 'MatkulController@edit');
//-----------------------------------------------------------


//Page Mata Kuliah
Route::resource('matkul2' , 'DataMatkulController');
Route::get('/matkul/{id}/destroy' , 'DataMatkulController@destroy');
Route::get('/jadwal/{id}/edit' , 'MatkulController@edit');
//-----------------------------------------------------------
