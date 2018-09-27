@extends('layouts.app_admin')
@section('content')
    <h5>Tambah Mata Kuliah</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">
            <div class="card-body">
                    <form method="post" action="{{ action('DataMatkulController@store') }}">
                     {{csrf_field()}}
                      <div class="form-group">
                          <label>Nama</label>
                          <input type="text" class="form-control" name="name" required="">
                          </div>

                          <!-- <div class="form-group">
                              <label> Pilih Dosen Pengajar</label>
                              <select class="form-control" name="lecturer_id">

                                  @foreach($dosen as $pengajar)

                                  <option value="{{$pengajar->id}}">{{$pengajar->name_lecture}}</option>

                                  @endforeach
                              </select>
                          </div> -->

                            <button class="btn btn-success btn-con">Simpan</button>
                            <button class="btn btn-default btn-con">Batal</button>
                    </form>


                      </div>
            </div>
        </div>
    </div>
</div>
@endsection
