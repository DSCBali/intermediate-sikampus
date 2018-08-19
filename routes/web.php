<?php

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
    return view('pages.user.index');
});

Route::get('/kelas','UserController@tampil');

Route::get('/kontak', function () {
    return view('pages.user.kontak');
});

Route::get('/db', function () {
    return view('pages/dashboard/index');
})->middleware('guest');

Route::get('/schedule','dbController@schedule')->middleware('auth:staffs');
Route::get('/create/schedule','createController@schedulec')->middleware('auth:staffs');
Route::post('/schedule','createController@schedule')->middleware('auth:staffs');
Route::get('/schedule/{id}/edit','updateController@uschedule');
Route::put('/schedule/{id}','updateController@schedule');
Route::delete('/schedule/{id}','destroyController@dschedule')->middleware('auth:staffs');

Route::get('/mahasiswa','dbController@mahasiswa')->middleware('auth:staffs');
Route::get('/create/mahasiswa','createController@mahasiswac')->middleware('auth:staffs');
Route::post('/mahasiswa','createController@mahasiswa')->middleware('auth:staffs');
Route::get('/mahasiswa/{id}/edit','updateController@umahasiswa');
Route::put('/mahasiswa/{id}','updateController@mahasiswa');
Route::delete('/mahasiswa/{id}','destroyController@dmahasiswa')->middleware('auth:staffs');

Route::get('/matkul','dbController@matkul')->middleware('auth:staffs');
Route::get('/create/matkul','createController@matkulc')->middleware('auth:staffs');
Route::post('/matkul','createController@matkul')->middleware('auth:staffs');
Route::get('/matkul/{id}/edit','updateController@umatkul');
Route::put('/matkul/{id}','updateController@matkul');
Route::delete('/matkul/{id}','destroyController@dmatkul')->middleware('auth:staffs');

Route::get('/dosen','dbController@dosen')->middleware('auth:staffs');
Route::get('/dosen/create','createController@dosenc')->middleware('auth:staffs');
Route::post('/dosen','createController@dosen')->middleware('auth:staffs');
Route::get('/dosen/{id}/edit','updateController@udosen');
Route::put('/dosen/{id}','updateController@dosen');
Route::delete('/dosen/{id}','destroyController@ddosen')->middleware('auth:staffs');

Route::get('/class','dbController@class')->middleware('auth:staffs');
Route::get('/class/create','createController@classc')->middleware('auth:staffs');
Route::post('/class','createController@class')->middleware('auth:staffs');
Route::delete('/class/{id}','destroyController@dclass')->middleware('auth:staffs');
Route::get('/class/{id}/edit','updateController@uclass');
Route::put('/class/{id}','updateController@class');

Route::get('/staff','dbController@staff')->middleware('auth:staffs');
Route::get('/staff/create','createController@staffc')->middleware('auth:staffs');
Route::post('/staff','createController@staff')->middleware('auth:staffs');

Route::get('/profile','dbController@profile')->middleware('auth:staffs');
Route::get('/profile/{id}/edit','updateController@uprofile');
Route::put('/profile/{id}','updateController@profile')->middleware('auth:staffs');

Route::get('/jamah','dbController@jamah')->middleware('auth:staffs');
Route::get('/create/jamah','createController@jamahc')->middleware('auth:staffs');
Route::post('/jamah','createController@jamah')->middleware('auth:staffs');

Route::post('/proses','loginController@login');

Route::post('/cari','UserController@cari');
Route::post('/kosong','UserController@cari');

Route::get('/keluar','loginController@keluar');
