<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\student;
use App\course;
use App\lecturer;
use App\clas;
use App\staff;
use App\jamah;

class createController extends Controller
{
  function classc()
  {
     return view('pages.create.class');
  }

  function class(Request $request)
  {
    $data = new clas;
    $data -> kls_name = $request->name;
    $data -> max_students = $request->maxs;
    $data -> save();
   return redirect('class');
  }

  function staffc()
  {
     return view('pages.create.staff');
  }

  function staff(Request $request)
  {
    $data = new staff;
    $data -> name = $request->name;
    $data -> dob = $request->dob;
    $data -> phone = $request->phone;
    $data -> gender = $request->gender;
    $data -> username = $request->username;
    $data -> password = $request->password;
    $data -> save();
   return redirect('staff');
  }

  function dosenc()
  {
     return view('pages.create.dosen');
  }

  function dosen(Request $request)
  {
    $data = new lecturer;
    $data -> name = $request->name;
    $data -> dob = $request->dob;
    $data -> phone = $request->phone;
    $data -> address = $request->address;
    $data -> gender = $request->gender;
    $data -> save();
   return redirect('dosen');
  }

  function matkulc()
  {
    $data = lecturer::all();
     return view('pages.create.matkul',['data'=>$data]);
  }

  function matkul(Request $request)
  {
    $data = new course;
    $data -> mk_name = $request->name;
    $data -> sks = $request->sks;
    $data -> save();
   return redirect('matkul');
  }

  function mahasiswac()
  {
     return view('pages.create.mahasiswa');
  }
  function mahasiswa(Request $request)
  {
    $data = new student;
    $data -> nim = $request->nim;
    $data -> name = $request->name;
    $data -> dob = $request->dob;
    $data -> phone = $request->phone;
    $data -> address = $request->address;
    $data -> gender = $request->gender;
    $data -> save();
   return redirect('mahasiswa');
  }

  function schedulec()
  {
    $data = clas::all();
     return view('pages.create.schedule',['data'=>$data]);
  }

  function schedule(Request $request)
  {
    $data = new schedule;
    $data -> day = $request->day;
    $data -> time = $request->time;
    $data -> save();
   return redirect('schedule');
  }

  function jamahc()
  {
    $data = student::all();
    $data1 = schedule::all();
    $data2 = clas::all();
    $data3 = lecturer::all();
    $data4 = course::all();
     return view('pages.create.jamah',['data'=>$data,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4]);
  }

  function jamah(Request $request)
  {
    $data = new jamah;
    $data -> id_mhs = $request->mahasiswa;
    $data -> id_sch = $request->jadwal;
    $data -> id_class = $request->kelas;
    $data -> id_lecturer = $request->dosen;
    $data -> id_course = $request->matkul;
    $data -> save();
   return redirect('jamah');
  }
}
