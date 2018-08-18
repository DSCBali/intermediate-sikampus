<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Course;
use Validator;



class DataMatkulController extends Controller
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

            $matkul = new Course;
            $matkuls = $matkul->all();
            return view('pages.user.index_matakuliah')->with('kelass',$matkuls);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $courses = Course::get();
        $dosen = Lecture::get();
        return view ('pages.user.create_matakuliah' , ['courses'=>$courses] , ['dosen' => $dosen]);




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
            'name' => 'required|max:20|unique:courses' ,



        ]);

        $matkul = new Course();
        $matkul->name = $request->input('name');
        $matkul->lecturer_id = $request->input('lecturer_id');


        $matkul->save();

        return redirect('/matkul2')->with('alert-success','Data berhasi dihapus!');


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
        $data = Course::where('id' , $id)->first();
        $data->delete();
        return redirect('kelas')->with('alert-success','Data berhasi dihapus!');
    }
}
