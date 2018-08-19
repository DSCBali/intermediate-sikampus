<?php

namespace App\Http\Controllers;

use App\Lecturer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLecturerRequest;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = Lecturer::paginate(15);
        return view('pages.lecturer.index',['lecturers' => $lecturers]);
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
    public function store(StoreLecturerRequest $request)
    {
        Lecturer::create($request->all());
        return redirect()->route('lecturer.index')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        return view('pages.lecturer.edit', ['lecturer' => $lecturer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(StoreLecturerRequest $request, Lecturer $lecturer)
    {
        $lecturer->update($request->all());
        return redirect()->route('lecturer.index')->with('success','Data dosen berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();
        return redirect()->route('lecturer.index')->with('success','Data dosen berhasil dihapus');
    }
}
