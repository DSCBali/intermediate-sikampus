<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Schedule;
use App\Course;
use App\kelas;
use App\Lecture;

use Validator;

class JadwalMatkulController extends Controller
{
    public function index()
    {

        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else{


                  $jadwal = new Schedule();
                  $dosen = new Course();

                  $jadwals = $jadwal->all();
                  $dosens = $dosen->all();
                  return view('pages.user.index_jadwal')->with('jadwals', $jadwals , 'dosens' , $dosens);

        }

    }
    public function pindah()
    {
        return view('pages.user.edit');
    }
    public function create()
    {
        $dosen = Lecture::get();
        $kelas = kelas::get();
        return view('pages.user.create_jadwal' , ['dosen'=>$dosen] , ['kelas'=>$kelas]);
    }
    public function store(Request $request)
    {
      $jadwal = new Schedule();
      $jadwal->day = $request->input('day');
      $jadwal->time = $request->input('time');
      $jadwal->course_id = $request->input('dosen');
      $jadwal->class_id = $request->input('kelas');
      $jadwal->save();
      return redirect('/jadwalmatkul')->with('alert-success','Data Berhasil Di Tambahkan');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $jadwal = Schedule::where('id',$id)->first();
        $jadwal->nim = $request->nim;
        $jadwal->name = $request->name;
        $jadwal->dob = $request->dob;
        $jadwal->address = $request->address;
        $jadwal->gender = $request->input('gender');
        $jadwal->class_id = $request->input('kelas');
        $jadwal->save();
        return redirect('/user2')->with('alert-success','Data berhasil diubah!');
    }
    public function destroy($id)
    {
              $data = Schedule::where('id' , $id)->first();
              $data->delete();
              return redirect('jadwalmatkul')->with('alert-success','Data berhasi dihapus!');
    }
}
