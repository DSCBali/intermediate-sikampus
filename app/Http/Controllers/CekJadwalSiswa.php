<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class CekJadwalSiswa extends Controller
{
    public function index()
    {

            Return view('pages.jadwalcek.cekjadwal');

    }

    public function pindah()
    {

    }

    public function create()
    {


    }


    public function store(Request $request)
    {

    }


    public function show(Request $request)
    {



        $jadwal = DB::table('students')
            ->where('nim', '=', $request->nim)
            ->join('schedules', 'students.id_sch', '=', 'schedules.id')
            ->join('kelas', 'students.class_id', '=', 'kelas.id')
            ->join('lectures', 'students.id_lecturer', '=', 'lectures.id')
            ->join('courses', 'students.id_course', '=', 'courses.id')
            ->select('students.*' , 'schedules.*', 'kelas.*' , 'lectures.*', 'courses.* ')
            ->get();

//            $dapat = $jadwal;

     return view ('pages.jadwalcek.cekjadwal')->with('jadwals' , $jadwal);


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
        //
    }
}

