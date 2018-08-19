<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
use App\jamah;
use App\lecturer;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.user.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tampil()
    {
      $user = lecturer::all();
      $user = lecturer::paginate(5);
      return view('pages.user.kelas',compact('user'));
    }

    public function cari(Request $request)
    {
      $user = DB::table('detail_jadwal')
                  ->where('nim', '=', $request->cari)
                  ->join('students', 'detail_jadwal.id_mhs', '=', 'students.id')
                  ->join('schedules', 'detail_jadwal.id_sch', '=', 'schedules.id')
                  ->join('class', 'detail_jadwal.id_class', '=', 'class.id')
                  ->join('lecturers', 'detail_jadwal.id_lecturer', '=', 'lecturers.id')
                  ->join('courses', 'detail_jadwal.id_course', '=', 'courses.id')
                  ->select('detail_jadwal.*', 'students.nim', 'schedules.day', 'schedules.time', 'class.kls_name', 'lecturers.name', 'courses.mk_name')
                  ->get();
      $nim = $request->cari;
      if (count($user)>0) {
        return view('pages.user.cari',compact('user'));
      }
      else {
        return view('pages.user.kosong',compact('nim'));
      }
    }

}
