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
    return redirect()->route('staff.login');
});

Route::resource('mahasiswa','MahasiswaController');

Route::prefix('student')->group(function() {
  Route::get('login', function(){
    return view('student-auth.login');
  });
  Route::get('dashboard', function(){
    return view('pages.dashboard');
  })->name('student.dashboard');
  Route::namespace('\Student')->group(function(){
    Route::post('login','LoginController@login')->name('student.login');
  });
});
Route::prefix('staff')->group(function() {
  Route::get('login', function(){
    return view('staff-auth.login');
  })->name('staff.login');
  Route::namespace('\Staff')->group(function(){
    Route::post('login','LoginController@login')->name('staff.login');
    Route::post('logout','LoginController@logout')->name('staff.logout');
  });
  Route::middleware('auth:staff')->group(function(){
    Route::get('dashboard', function(){
      return view('pages.dashboard');
    })->name('staff.dashboard');
    Route::resource('class','ClassController');
    Route::resource('student','StudentController');
    Route::resource('lecturer','LecturerController');
    Route::resource('course','CourseController');
    Route::resource('schedule','ScheduleController');
  });
});
Auth::routes();
