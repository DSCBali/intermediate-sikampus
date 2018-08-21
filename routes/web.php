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
//Route::resource('siswa' , 'DataSiswaController');
// Route::get('/getdata/{id}/post' , 'DataSiswaController@show');
//Route::get('/siswa/{id}/destroy' , 'DataSiswaController@destroy');
//Route::get('/siswa/{id}/edit' , 'UserController@edit');
//-----------------------------------------------------------



//PAGE DOSEN
Route::resource('user2' , 'DosenController');
//Route::get('/user2/{id}/destroy' , 'DataDosenController@destroy');
//Route::get('/user2/{id}/edit' , 'DosenController@edit');
//Route::post('/user2/{id}/update' , 'DosenController@update');
//-----------------------------------------------------------

//PAGE jadwal
Route::resource('jadwalmatkul' , 'JadwalMatkulController');
//Route::get('/jadwalmatkul/{id}/destroy' , 'JadwalMatkulController@destroy');
//Route::get('/jadwalmatkul/{id}/edit' , 'MatkulController@edit');
//-----------------------------------------------------------

//Page Kelas
Route::resource('kelas' , 'KelasController');
//Route::get('/kelas/{id}/destroy' , 'DataKelasController@destroy');
//Route::get('/kelas/{id}/edit' , 'MatkulController@edit');
//-----------------------------------------------------------


//Page Mata Kuliah
Route::resource('matkul2' , 'DataMatkulController');
Route::get('/matkul2/{id}/destroy' , 'DataMatkulController@destroy');
Route::get('/matkul2/{id}/edit' , 'MatkulController@edit');
//-----------------------------------------------------------
