<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Validator;

class DataDosenController extends Controller
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

        $data = Lecture::where('id' , $id)->first();
        $data->delete();
        return redirect('user2')->with('alert-success','Data berhasi dihapus!');
    }

}
