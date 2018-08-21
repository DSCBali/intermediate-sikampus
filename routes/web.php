<?php

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

//UNTUK DATA SISWA PAGE
Route::resource('user','UserController');
//-----------------------------------------------------------



//PAGE DOSEN
Route::resource('user2' , 'DosenController');
//-----------------------------------------------------------

//PAGE jadwal
Route::resource('jadwalmatkul' , 'JadwalMatkulController');
//-----------------------------------------------------------

//Page Kelas
Route::resource('kelas' , 'KelasController');
//-----------------------------------------------------------


//Page Mata Kuliah
Route::resource('matkul2' , 'DataMatkulController');
//-----------------------------------------------------------
