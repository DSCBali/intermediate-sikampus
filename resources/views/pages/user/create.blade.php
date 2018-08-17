@extends('layouts.app_admin')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ action('DataSiswaController@store') }}">
                     {{csrf_field()}}
                      <div class="form-group">
                          <label>Nim</label>

                          <input type="text" class="form-control" name="nim" required="">
                          </div>
                            <div class="form-group">
                                <label>Nama</label>

                                <input type="text" class="form-control" name="nama" required="">
                            </div>

                            <div class="form-group">
                                <label>Date of birth</label>

                                <input type="date" class="form-control" name="dob" required="">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>

                                <input type="text" class="form-control" name="phone" required="">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>

                                <textarea class="form-control" required="" name="alamat"> </textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="gender">
                                    <option value="Male">Laki-laki</option>
                                    <option value="Female">Perempuan</option>
                                </select>

                            </div>
                        <div class="form-group">
                            <label> Pilih Kelas</label>
                            <select class="form-control" name="kelas">

                                @foreach($class as $kelas)

                                <option value="{{$kelas->id}}">{{$kelas->name}}</option>

                                @endforeach
                            </select>
                        </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <button class="btn btn-default btn-con">Batal</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
