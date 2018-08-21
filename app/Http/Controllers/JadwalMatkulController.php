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
    public function create()
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {
            $dosen = Lecture::get();
            $kelas = kelas::get();
            return view('pages.user.create_jadwal', ['dosen' => $dosen], ['kelas' => $kelas]);
        }
    }
    public function store(Request $request)
    {
        if (!Session::get('login')) {
            return redirect('/login')->with('alert', 'Kamu harus login dulu');
        }
        else
            {

        $jadwal = new Schedule();
        $jadwal->day = $request->input('day');
        $jadwal->time = $request->input('time');
        $jadwal->course_id = $request->input('dosen');
        $jadwal->class_id = $request->input('kelas');
        $jadwal->save();
        return redirect('/jadwalmatkul')->with('alert-success', 'Data Berhasil Di Tambahkan');
       }
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else
        {
            $data = Schedule::find($id);
            $course = Course::get();
            $kelas = kelas::get();
            return view('pages.user.update_jadwal', compact('data') , ['course' => $course])->with(['kelas' => $kelas]);
        }
    }
    public function update(Request $request, $id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {



            $req = [
                'day' => $request->day,
                'time' => $request->time,
                'course_id' => $request->matkul,
                'class_id' => $request->kelas
            ];

            $data = Schedule::where('id', $id)->update($req);
            return redirect('jadwalmatkul')->with('alert-succes', 'Data Berhasil Di Ubah!!');

        }
    }
    public function destroy($id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else
            {
            $data = Schedule::where('id', $id)->first();
            $data->delete();
            return redirect('jadwalmatkul')->with('alert-success', 'Data berhasi dihapus!');
        }
    }
}
