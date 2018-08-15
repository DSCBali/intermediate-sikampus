@extends('layouts.app')
@section('content')

    <form method="get" action="/siswa">
         <label>NIM</label><br>
         <input type="text" name="nim"><br><br>
         <button type="submit" >Lihat</button>
    </form>

@endsection
