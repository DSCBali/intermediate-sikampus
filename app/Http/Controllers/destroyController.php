<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\student;
use App\course;
use App\lecturer;
use App\clas;
use App\staff;

class destroyController extends Controller
{
  public function dclass($id)
  {
    $class = clas::find($id);
    $class->delete();
    return redirect('class');
  }

  public function ddosen($id)
  {
    $class = lecturer::find($id);
    $class->delete();
    return redirect('dosen');
  }

  public function dmatkul($id)
  {
    $class = course::find($id);
    $class->delete();
    return redirect('matkul');
  }

  public function dschedule($id)
  {
    $class = schedule::find($id);
    $class->delete();
    return redirect('schedule');
  }

}
