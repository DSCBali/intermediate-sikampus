<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\student;
use App\course;
use App\lecturer;
use App\clas;
use App\staff;

class updateController extends Controller
{
  public function uclass($id)
    {
        $user = clas::find($id);
        return view('pages.edit.class',['users' => $user]);
    }

  public function class(Request $request, $id)
  {
    $user = clas::find($id);
    $user -> kls_name      = $request->name;
    $user -> max_students  = $request->maxs;
    $user -> save();
    return redirect('class');
  }

  public function udosen($id)
    {
        $user = lecturer::find($id);
        return view('pages.edit.dosen',['users' => $user]);
    }

  public function dosen(Request $request, $id)
  {
    $user = lecturer::find($id);
    $user -> name  = $request->name;
    $user -> dob  = $request->dob;
    $user -> phone  = $request->phone;
    $user -> address  = $request->address;
    $user -> save();
    return redirect('dosen');
  }

  public function umatkul($id)
    {
        $user = course::find($id);
        return view('pages.edit.matkul',['users' => $user]);
    }

  public function matkul(Request $request, $id)
  {
    $user = course::find($id);
    $user -> mk_name  = $request->name;
    $user -> sks  = $request->sks;
    $user -> save();
    return redirect('matkul');
  }

  public function umahasiswa($id)
    {
        $user = student::find($id);
        return view('pages.edit.mahasiswa',['users' => $user]);
    }

  public function mahasiswa(Request $request, $id)
  {
    $user = student::find($id);
    $user -> name  = $request->name;
    $user -> dob  = $request->dob;
    $user -> phone  = $request->phone;
    $user -> address  = $request->address;
    $user -> save();
    return redirect('mahasiswa');
  }

  public function uschedule($id)
    {
        $user = schedule::find($id);
        return view('pages.edit.schedule',['users' => $user]);
    }

  public function schedule(Request $request, $id)
  {
    $user = schedule::find($id);
    $user -> day  = $request->day;
    $user -> time  = $request->time;
    $user -> save();
    return redirect('schedule');
  }

  public function uprofile($id)
    {
        $user = staff::find($id);
        return view('pages.edit.profile',['users' => $user]);
    }

  public function profile(Request $request, $id)
  {
    $user = staff::find($id);
    $user -> name  = $request->name;
    $user -> dob  = $request->dob;
    $user -> phone  = $request->phone;
    $user -> password  = $request->password;
    $user -> save();
    return redirect('profile');
  }
}
