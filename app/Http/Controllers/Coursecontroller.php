<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lecturer;
class Coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $course = new Course;
        $courses = $course->all();
        return view('pages.course.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecturer = Lecturer::get()->where('course_id', NULL);
        return view('pages.course.create', ['lecturer'=>$lecturer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $course = new Course;
      $this->validate($request,[
        'name' => 'required|unique:courses',
        'lecturer_id' => 'required'
      ]);

      $req = [
        'name' => $request->name,
        'lecturer_id' => $request->lecturer_id
      ];

      $data = $course->create($req);
      $courses = Course::where('lecturer_id', $request->lecturer_id)->first();
      $lecturers = Lecturer::where('id', $request->lecturer_id);
      $a = $courses->id;
      $reqq = [
        'course_id'=>$a
      ];
      $datas = $lecturers->update($reqq);

      return redirect()->route('course.create')->with('message','Data berhasil ditambah');
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
      $data = Course::find($id);
      $lecturer = Lecturer::get()->where('course_id', NULL);
      return view('pages.course.edit', compact('data','lecturer'));
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
      'name' => 'required',
      'lecturer_id' => 'required'
      ]);

      $req = [
        'name' => $request->name,
        'lecturer_id' => $request->lecturer_id
      ];
      $data = Course::where('id',$id)->update($req);

      return redirect()->route('course.index');
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
