@extends('layouts.app_admin')
@section('content')
    <h5>Edit Data Dosen</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ route('user2.update' , [ 'id' => $data -> id ]) }}">

                     {{csrf_field()}}
                        @method('PUT')

                      <div class="form-group">
                          <label>Nama</label>
                          <input type="text" class="form-control" name="name" required="" value="{{$data -> name_lecture }}">
                          </div>
                          <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select class="form-control" name="gender">
                                  <option value="{{$data->gender}}">{{$data->gender}}</option>
                                  @if($data->gender=="Female")
                                  <option value="Male">Male</option>
                                  @else
                                  <option value="Female">Female</option>
                                  @endif
                              </select>
                          </div>
                            <div class="form-group">
                                <label>Date of birth</label>
                                <input type="date" class="form-control" name="dob" required="" value="{{$data->dob}}">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" required="" value="{{$data->phone}}">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" required="" name="address">{{$data->address}} </textarea>
                            </div>

                            <div class="form-group">
                                <label>Pilih Mata Kuliah</label>
                                <select class="form-control" name="matkul">
                                        <option value="{{$data->course_id}}">{{$data->get_course->name}}</option>
                                    @foreach($matakuliah as $matkul)
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
