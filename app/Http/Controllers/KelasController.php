<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\kelas;
use Validator;

class KelasController extends Controller
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

            $kelas = new kelas;
            $kelass = $kelas->all();
            return view('pages.user.index_kelas')->with('kelass',$kelass);

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
        $kelas = kelas::get();
        return view ('pages.user.create_kelas' , ['kelas'=>$kelas]);
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
        Validator::make(request()->all(), [


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
        $dosens = Lecture::where('id',$id)->first();
        $dosens->nim = $request->nim;
        $dosens->name = $request->name;
        $dosens->dob = $request->dob;
        $dosens->address = $request->address;
        $dosens->gender = $request->input('gender');
        $dosens->class_id = $request->input('kelas');
        $dosens->save();
        return redirect('/user2')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    //     */


    public function destroy($id)
    {
        $data = kelas::where('id' , $id)->first();
        $data->delete();
        return redirect('kelas')->with('alert-success','Data berhasi dihapus!');
    }


}
