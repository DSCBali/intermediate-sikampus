<?php

namespace App\Http\Controllers;

use App\Lecture;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Validator;

class DosenController extends Controller
{
    public function index()
    {

        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else{

            $dosen = new Lecture();
            $dosens = $dosen->all();
            return view('pages.user.index_dosen')->with('dosens',$dosens);

        }

    }


    public function create()
    {

        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {
            $course = Course::get();

            return view('pages.user.create_dosen', ['course' => $course]);
        }

    }

    public function store(Request $request)
    {

        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else {

            Validator::make(request()->all(), [

                //            'nim' => 'required|min:9|unique:students' ,
                'name' => 'required|max:20|unique:students'

            ]);

            $dosens = new Lecture();
            $dosens->name = $request->input('name');
            $dosens->gender = $request->input('gender');
            $dosens->dob = $request->input('dob');
            $dosens->phone = $request->input('phone');
            $dosens->address = $request->input('address');
            $dosens->course_id = $request->input('matkul');


            $dosens->save();

            return redirect('/user2');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else
            {
            $data = Lecture::find($id);
            $matakuliah = Course::get();
            return view('pages.user.update_dosen', compact('data') , ['matakuliah' => $matakuliah]);
            }
    }

    public function update(Request $request, $id)
    {
        if(!Session::get('login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }

        else {
            Validator::make(request()->all(), [

                //            'nim' => 'required|min:9|unique:students' ,
                'name' => 'required|max:20|unique:students'

            ]);


            $req = [

                'name' => $request->name,
                'gender' => $request->gender,
                'dob' => $request->dob,
                'phone' => $request->phone,
                'address' => $request->address,
                'course_id' => $request->matkul
            ];

            $data = Lecture::where('id', $id)->update($req);
            return redirect('user2')->with('alert-succes', 'Data Berhasil Di Ubah!!');

        }
    }

   public function destroy($id)
   {


       if(!Session::get('login')){
           return redirect('/login')->with('alert','Kamu harus login dulu');
       }
       else {
           $data = Lecture::where('id', $id)->first();
           $data->delete();
           return redirect('user2')->with('alert-success', 'Data berhasi dihapus!');
       }
   }
}
