@extends('layouts.app_admin')
@section('content')
    <h5>Update Kelas</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">
            <div class="card-body">
                    <form method="post" action="{{ action('KelasController@update' , ['id' => $kelas -> id]) }}">
                     {{csrf_field()}}
                        @method('PUT')
                      <div class="form-group">
                          <label>Nama Kelas</label>
                          <input type="text" class="form-control" name="name" value="{{$kelas->name}}" required="">
                          </div>
                          <label>Maksimal Mahasiswa</label>
                          <input type="text" class="form-control" name="max_students" value="{{$kelas->max_students}}" required="">
                            <button class="btn btn-success btn-con">Simpan</button>
                            <button class="btn btn-default btn-con">Batal</button>
                    </form>
                      </div>
            </div>
        </div>
    </div>
</div>
@endsection
