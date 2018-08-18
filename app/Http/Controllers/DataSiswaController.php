<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\kelas;
use App\Course;
use App\Lecture;
use App\Schedule;
use App\Student;
use Validator;


class DataSiswaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
  
      $student = new Student();

      $students = $student->all();
      return view('pages.user.index')->with('students',$students);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {







  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */





  public function store($request)
  {


              Validator::make(request()->all(), [

                  'nim' => 'required|min:9|unique:students' ,
                  'name' => 'required|max:20|unique:students' ,

              ]);

              $students = new Student();
              $students->nim = $request->input('nim');
              $students->name = $request->input('nama');
              $students->dob = $request->input('dob');
              $students->phone = $request->input('phone');
              $students->address = $request->input('alamat');
              $students->gender = $request->input('gender');
              $students->class_id = $request->input('kelas');

              $students->save();

              return redirect('/user');


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {


                // return Student::find(1)->nim->name->phone;
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
      $students = ModelKontak::where('id',$id)->first();
      $students->nim = $request->nim;
      $students->name = $request->name;
      $students->dob = $request->dob;
      $students->address = $request->address;
      $students->gender = $request->input('gender');
      $students->class_id = $request->input('kelas');
      $students->save();
      return redirect()->route('kontak.index')->with('alert-success','Data berhasil diubah!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

  public function destroy($id)
  {

                 $data = Student::where('id' , $id)->first();
                 $data->delete();
                 return redirect('user')->with('alert-success','Data berhasi dihapus!');
  }



}
