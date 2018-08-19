<?php

namespace App\Http\Controllers;

use App\Lecture;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Validator;

class DosenController extends Controller
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

            $dosen = new Lecture;
            $dosens = $dosen->all();
            return view('pages.user.index_dosen')->with('dosens',$dosens);

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
        $course = Course::get();
        return view ('pages.user.create_dosen' , ['course'=>$course]);
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
    **/
   public function destroy($id)
   {

             $data = Lecture::where('id' , $id)->first();
             $data->delete();
             return redirect('user2')->with('alert-success','Data berhasi dihapus!');
   }
}
