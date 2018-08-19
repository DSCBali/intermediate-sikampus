<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
class Classcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $class = new Kelas;
      $classes = $class->all();
      return view('pages.class.index')->with('classes', $classes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $class = new Kelas;
      $this->validate($request,[
        'name' => 'required|min:5|unique:classes',
        'max_students' => 'required|numeric'
      ]);

      $req = [
        'name' => $request->name,
        'max_students' => $request->max_students
      ];
      $data = $class->create($req);

      return redirect()->route('class.create')->with('message','Data berhasil ditambah');
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
        $data = Kelas::find($id);
      return view('pages.class.edit', compact('data'));
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
        'name' => 'required|min:5',
        'max_students' => 'required|numeric'
      ]);

      $req = [
        'name' => $request->name,
        'max_students' => $request->max_students
      ];

      $data = Kelas::where('id',$id)->update($req);
      return redirect()->route('class.index');
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
