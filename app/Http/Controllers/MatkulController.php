<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Course;

class MatkulController extends Controller
{
    public function index()
    {

        $jadwal = new Schedule();
        $dosen = new Course();

        $jadwals = $jadwal->all();
        $dosens = $dosen->all();
        return view('pages.user.index_jadwal')->with('jadwals', $jadwals , 'dosens' , $dosens);
    }
    public function create()
    {







    }
    public function store(Request $request)
    {

        $jadwal = new Schedule();
        $jadwal->day = $request->input('day');
        $jadwal->time = $request->input('time');
        $jadwal->course_id = $request->input('dosen');
        $jadwal->class_id = $request->input('kelas');
        $jadwal->save();
        return redirect('/matkul')->with('alert-success','Data Berhasil Di Tambahkan');

    }
    public function show($id)
    {


        // return Student::find(1)->nim->name->phone;
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {

        $data = Schedule::where('id' , $id)->first();
        $data->delete();
        return redirect('matkul')->with('alert-success','Data berhasi dihapus!');
    }

}
