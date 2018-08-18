@extends('layouts.app_admin')
@section('content')
    <h5>Tambah Jadwal</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ action('MatkulController@store') }}">
                     {{csrf_field()}}
                      <div class="form-group">
                          <label>Hari</label>
                          <input type="text" class="form-control" name="day" required="">
                          </div>
                          <label>Jam</label>
                          <input type="datetime" class="form-control" name="time" required="">


                          <div class="form-group">
                              <label> Pilih Dosen</label>
                              <select class="form-control" name="dosen">

                                  @foreach($dosen as $data)

                                  <option value="{{$data->id}}">{{$data->name}}</option>

                                  @endforeach
                              </select>
                          </div>

                        <div class="form-group">
                            <label> Pilih Kelas</label>
                            <select class="form-control" name="kelas">

                                @foreach($kelas as $data2)

                                <option value="{{$data2->id}}">{{$data2->name}}</option>

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
</div>
@endsection
