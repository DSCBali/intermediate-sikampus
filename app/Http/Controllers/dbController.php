<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\schedule;
use App\student;
use App\course;
use App\lecturer;
use App\clas;
use App\staff;
use App\jamah;
use Illuminate\Support\Facades\Auth;

class dbController extends Controller
{

  function schedule()
  {
    $user = DB::table('schedules')
                ->select('schedules.*')
                ->get();
    return view('pages/dashboard/schedule',compact('user'));
  }

  function mahasiswa()
  {
    $user = student::all();
    return view('pages/dashboard/mahasiswa',['user'=>$user]);
  }

  function matkul()
  {
    $user = DB::table('courses')
                ->select('courses.*')
                ->get();
    return view('pages/dashboard/matkul',compact('user'));
  }

  function dosen()
  {
    $user = lecturer::all();
    return view('pages/dashboard/dosen',['user'=>$user]);
  }

  function class()
  {
    $user = clas::all();
    return view('pages/dashboard/class',['user'=>$user]);
  }

  function staff()
  {
    $user = staff::all();
    return view('pages/dashboard/staff',['user'=>$user]);
  }

  function profile()
  {
    $user = Auth::user();
    return view('pages/dashboard/profile',['user'=>$user]);
  }

  function jamah()
  {
    $user = DB::table('detail_jadwal')
                ->join('students', 'detail_jadwal.id_mhs', '=', 'students.id')
                ->join('schedules', 'detail_jadwal.id_sch', '=', 'schedules.id')
                ->join('class', 'detail_jadwal.id_class', '=', 'class.id')
                ->join('lecturers', 'detail_jadwal.id_lecturer', '=', 'lecturers.id')
                ->join('courses', 'detail_jadwal.id_course', '=', 'courses.id')
                ->select('detail_jadwal.*', 'students.nim', 'schedules.day', 'schedules.time', 'class.kls_name', 'lecturers.name', 'courses.mk_name')
                ->get();
    return view('pages/dashboard/jamah',['user'=>$user]);
  }

}
