@extends('layouts.app')
@section('content')
    <h5>Tambah Matakuliah</h5>
    <div class="row">
        <div class="col-md-6">
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ route('schedule.store') }}">
                      @csrf
                            <div class="form-group">
                                <label>Tanggal/hari</label>
                                <input type="text" name="day" autocomplete="off" class="form-control datepicker2" value="{{ old('day') }}">
                                @if ($errors->has('day'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('day') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="text" name="time" class="form-control" value="{{ old('time') }}">
                                @if ($errors->has('time'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Matakuliah</label>
                                <select class="form-control" name="course_id">
                                  <option value="">Pilih Matakuliah</option>
                                  @foreach ($courses as $course)
                                    <option {{ (old('course_id') === $course->id) ? 'selected':'' }} value="{{ $course->id }}">{{ $course->name }}</option>
                                  @endforeach
                                </select>
                                @if ($errors->has('course_id'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('course_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <select class="form-control" name="class_id">
                                  <option value="">Pilih Kelas</option>
                                  @foreach ($classes as $class)
                                    <option {{ (old('class_id') === $class->id) ? 'selected':'' }} value="{{ $class->id }}">{{ $class->name }}</option>
                                  @endforeach
                                </select>
                                @if ($errors->has('class_id'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('class_id') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{ route('schedule.index') }}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
