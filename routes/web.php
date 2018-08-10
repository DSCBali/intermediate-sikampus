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
    return view('pages.dashboard');
});

Route::resource('user','UserController');
//Route::resource('mahasiswa','MahasiswaController');
Route::prefix('student')->group(function() {
  Route::get('login', function(){
    return view('student-auth.login');
  });
  Route::namespace('App\Http\Controllers\Student')->group(function(){
    Route::post('login','LoginController@login')->name('student.login');
  });
});
Route::prefix('staff')->group(function() {
  Route::get('login', function(){
    return view('staff-auth.login');
  });
  Route::namespace('App\Http\Controllers\Staff')->group(function(){
    Route::post('login','LoginController@login')->name('staff.login');
  });
});
Auth::routes();
