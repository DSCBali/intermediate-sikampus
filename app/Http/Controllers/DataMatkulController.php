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


        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {

            $courses = Course::get();
            $dosen = Lecture::get();
            return view('pages.user.create_matakuliah', ['courses' => $courses], ['dosen' => $dosen]);

        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





    public function store(Request $request)
    {


        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {

            Validator::make(request()->all(), [

//
                'name' => 'required|max:20|unique:courses',


            ]);

            $matkul = new Course();
            $matkul->name_courses = $request->input('name');
            $matkul->lecturer_id = $request->input('lecturer_id');


            $matkul->save();

            return redirect('/matkul2')->with('alert-success', 'Data berhasi dihapus!');

        }

    }


    public function show($id)
    {

    }


    public function edit(Request $request , $id)
    {

        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else
            {

              $matkul = Course::find($id);
              return view('pages.user.update_matakuliah' , compact('matkul'));

        }
    }



    public function update(Request $request, $id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else{

            $masukkan = [


                'name'=>$request->name_courses


            ];

            $data = Course::where('id' , $id)->update($masukkan);
            return redirect('matkul2')->with('alert-succes'  , 'Data Berhasil Dirubah');


        }
    }


    public function destroy($id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {
            $data = Course::where('id', $id)->first();
            $data->delete();
            return redirect('matkul2')->with('alert-success', 'Data berhasi dihapus!');
        }
    }
}
