<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function __construct(){
      $this->middleware('auth:student');
    }

    public function dashboard(){
      $student = auth()->user();
      return view('pages.student.dashboard', ['student' => $student]);
    }
}
