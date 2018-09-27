@extends('layouts.app_admin')
@section('content')
    <h5>Tambah Dosen</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ action('DosenController@store') }}">
                     {{csrf_field()}}
                      <div class="form-group">
                          <label>Nama</label>
                          <input type="text" class="form-control" name="name" required="">
                          </div>
                          <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select class="form-control" name="gender">
                                  <option value="Male">Laki-laki</option>
                                  <option value="Female">Perempuan</option>
                              </select>
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
                                <textarea class="form-control" required="" name="address"> </textarea>
                            </div>
                        <div class="form-group">
                            <label> Pilih Mata Kuliah</label>
                            <select class="form-control" name="matkul">

                                @foreach($course as $matkul)

                                <option value="{{$matkul->id}}">{{$matkul->name_courses}}</option>

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
