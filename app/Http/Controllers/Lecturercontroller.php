<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;
use App\Course;
class Lecturercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $lecturer = new Lecturer;
      $lecturers = $lecturer->all();
      return view('pages.lecturer.index')->with('lecturers', $lecturers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.lecturer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new Lecturer;
        $this->validate($request,[
          'name'=> 'required',
          'address' => 'required',
          'phone' => 'required|numeric',
          'dob' => 'required',
          'gender' => 'required'
        ]);

        $req = [
          'name' =>$request->name,
          'gender' =>$request->gender,
          'dob' =>$request->dob,
          'phone' =>$request->phone,
          'address' =>$request->address
        ];
        $data = $dosen->create($req);
        return view('pages.lecturer.create')->with('message','Data berhasil ditambah');
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
        $data = Lecturer::find($id);
        return view('pages.lecturer.edit', compact('data'));
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
      $this->validate($request,[
        'name'=> 'required',
        'address' => 'required',
        'phone' => 'required|numeric',
        'dob' => 'required',
        'gender' => 'required'
      ]);

      $req = [
        'name' =>$request->name,
        'gender' =>$request->gender,
        'dob' =>$request->dob,
        'phone' =>$request->phone,
        'address' =>$request->address
      ];
      $data = Lecturer::where('id',$id)->update($req);
      return redirect()->route('lecturer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Student = Lecturer::find($id);
      $Student->delete();
      return redirect()->route('student.index')->with('success','Data berhasil dihapus');

      /*
      

      $courses = Course::where('lecturer_id', $request->lecturer_id)->first();
      $lecturers = Lecturer::where('id', $request->lecturer_id);
      $b = $courses->id;
      $requ = [
        'course_id'=>$b
      ];
      $d = $lecturers->update($requ);
      */
    }
}
