@extends('layouts.app_admin')
@section('content')
    <h5>Edit Jadwal</h5>
    <div class="row">
        <div class="col-md-6">


            <div id="card-advance" class="card card-default">

                <div class="card-body">
                    <form method="post" action="{{ route('jadwalmatkul.update' , [ 'id' => $data -> id ]) }}">
                        {{csrf_field()}}
                        @method('PUT')
                        <div class="form-group">
                            <label>Hari</label>
                            <input type="text" class="form-control" name="day" value="{{$data->day}}" required="">
                        </div>
                        <div class="form-group">
                        <label>Jam</label>
                        <input type="datetime" class="form-control" name="time" value="{{$data->time}}" required="">
                        </div>
                        <div class="form-group">
                            <label> Pilih Mata Kuliah</label>
                            <select class="form-control" name="matkul">
                                <option value="{{$data->course_id}}">{{$data->get_course->name}}</option>
                                @foreach($course as $data2)
                                    <option value="{{$data2->id}}">{{$data2->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Pilih Kelas</label>
                            <select class="form-control" name="kelas">
                                <option value="{{$data->class_id}}">{{$data->get_class->name}}</option>
                                @foreach($kelas as $data3)
                                        <option value="{{$data3->id}}">{{$data3->name}}</option>
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
