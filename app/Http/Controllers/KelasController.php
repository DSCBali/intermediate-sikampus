<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Kelas;
use App\Schedule;
use Validator;

class KelasController extends Controller
{

    public function index()
    {

        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else{

            $kelas = new Kelas;
            $kelass = $kelas->all();
            return view('pages.user.index_kelas')->with('kelass',$kelass);

        }

    }

    public function pindah()
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {
            return view('pages.user.edit');
        }
    }


    public function create()
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {
            $kelas = Kelas::get();
            return view('pages.user.create_kelas', ['kelas' => $kelas]);
        }

    }

    public function store(Request $request)
    {

        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else
            {

            Validator::make(request()->all(), [


                'name' => 'required|max:20|unique:kelas',
                'max_students' => 'required|max:30|'


            ]);

            $kelas = new Kelas();
            $kelas->name_kls = $request->input('name');
            $kelas->max_students = $request->input('max_students');


            $kelas->save();

            return redirect('/kelas')->with('alert-success', 'Data berhasi dihapus!');
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

            $kelas = Kelas::find($id);
            return view('pages.user.update_kelas' , compact('kelas'));

        }
    }


    public function update(Request $request, $id)
    {

        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {


            $masukkan =
                [


                    'name'=>$request->name_kls ,
                    'max_students'=>$request->max_students


                ];

            $data = Kelas::where('id' , $id)->update($masukkan);
            return redirect('/kelas')->with('alert-success', 'Data berhasil diubah!');
        }
    }



    public function destroy($id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {
            $data = Kelas::where('id', $id)->first();
            $data->delete();
            return redirect('kelas')->with('alert-success', 'Data berhasi dihapus!');
        }
    }


}
