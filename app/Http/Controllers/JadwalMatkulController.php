<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;
use Validator;

class JadwalMatkulController extends Controller
{
    public function index()
    {

        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else{

            $dosen = new Lecture;
            $dosens = $dosen->all();
            return view('pages.user.index_dosen')->with('dosens',$dosens);

        }

    }
    public function pindah()
    {
        return view('pages.user.edit');
    }
    public function create()
    {
        $course = Course::get();
        return view('pages.user.create_dosen' , ['course'=>$course]);
    }
    public function store(Request $request)
    {
        //
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
        $dosens = Lecture::where('id',$id)->first();
        $dosens->nim = $request->nim;
        $dosens->name = $request->name;
        $dosens->dob = $request->dob;
        $dosens->address = $request->address;
        $dosens->gender = $request->input('gender');
        $dosens->class_id = $request->input('kelas');
        $dosens->save();
        return redirect('/user2')->with('alert-success','Data berhasil diubah!');
    }
    public function destroy($id)
    {

    }
}
