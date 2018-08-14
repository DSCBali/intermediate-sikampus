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

//Route::resource('mahasiswa','MahasiswaController');

Route::prefix('student')->group(function() {
  Route::get('login', function(){
    return view('student-auth.login');
  });
  Route::namespace('\Student')->group(function(){
    Route::post('login','LoginController@login')->name('student.login');
  });
});
Route::prefix('staff')->group(function() {
  Route::get('login', function(){
    return view('staff-auth.login');
  });
  Route::namespace('\Staff')->group(function(){
    Route::post('login','LoginController@login')->name('staff.login');
    Route::post('logout','LoginController@logout')->name('staff.logout');
  });
  Route::middleware('auth:staff')->group(function(){
    Route::get('dashboard', function(){
      return view('pages.dashboard');
    })->name('staff.dashboard');
  });
});
Auth::routes();
