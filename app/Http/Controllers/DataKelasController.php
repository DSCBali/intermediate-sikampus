<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

use App\kelas;

class DataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dosen = new Lecture();

        $dosens = $dosen->all();
        return view('pages.user.index_dosen')->with('dosens', $dosens);
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





    public function store(Request $request)
    {


        Validator::make(request()->all(), [

//
            'name' => 'required|max:20|unique:kelas' ,
            'max_students' => 'required|max:30|'


        ]);

        $kelas = new Kelas();
        $kelas->name = $request->input('name');
        $kelas->max_students = $request->input('max_students');


        $kelas->save();

        return redirect('/kelas')->with('alert-success','Data berhasi dihapus!');


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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        $data = kelas::where('id' , $id)->first();
        $data->delete();
        return redirect('kelas')->with('alert-success','Data berhasi dihapus!');
    }

}
