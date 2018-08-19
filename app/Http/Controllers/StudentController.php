<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Student;
// use App\Kelas;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = new Student;
        $students = $student->all();
        return view('pages.student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //
        // $class = Kelas::get();
        // , ['class'=>$class]
        return view('pages.student.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $this->validate($request,[
          'nim' => 'required|min:9|max:9|unique:students',
          'name' => 'required',
          'dob' => 'required',
          'phone' => 'required|numeric',
          'address' => 'required',
          'gender' => 'required'
        ]);

        $req = [
          'nim' => $request->nim,
          'name' => $request->name,
          'dob' => $request->dob,
          'phone' => $request->phone,
          'address' => $request->address,
          'gender' => $request->gender
        ];
        $data = $student->create($req);

        return redirect()->route('student.create')->with('message','Data berhasil ditambah');
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
        $data = Student::find($id);
        return view('pages.student.edit', compact('data'));
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
        'dob' => 'required',
        'phone' => 'required|numeric',
        'address' => 'required',
        'gender' => 'required'
      ]);

      $req = [
        'name' => $request->name,
        'dob' => $request->dob,
        'phone' => $request->phone,
        'address' => $request->address,
        'gender' => $request->gender
      ];

      $data = Student::where('id',$id)->update($req);
      return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Student = Student::find($id);
      $Student->delete();
      return redirect()->route('student.index')->with('success','Data berhasil dihapus');

    }
}
