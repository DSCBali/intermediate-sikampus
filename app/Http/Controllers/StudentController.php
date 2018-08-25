<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Student;
use App\kelas;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      if(!Session::get('login')){
          return redirect('/login')->with('alert','Kamu harus login dulu');
      }
      else{

        $student = new Student;
        $students = $student->all();
        return view('pages.user.index')->with('students',$students);

      }

    }

    public function pindah()
    {
        return view('pages.user.edit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = kelas::get();
        return view ('pages.user.create' , ['class'=>$class]);
//        return view ('pages.user.index' , ['class'=>$class]);

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
//        $students = Student::where('id',$id)->first();
//        $students->nim = $request->nim;
//        $students->name = $request->name;
//        $students->dob = $request->dob;
//        $students->address = $request->address;
//        $students->gender = $request->input('gender');
//        $students->class_id = $request->input('kelas');
//        $students->save();
//        return redirect('/user')->with('alert-success','Data berhasil diubah!');
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
}
