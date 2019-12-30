@extends('layouts.app')
@section('content')

    <form method="post" action="{{action('CekJadwalSiswa@show')}}">
        {{csrf_field()}}
         <label>NIM</label><br>
         <input type="text" name="nim"><br><br>
         <button type="submit" >Lihat</button>
    </form>

@endsection
