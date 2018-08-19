@extends('layouts.app')
@section('content')
    <h5>Edit Jadwal</h5>
    <div class="row">
        <div class="col-md-6">
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ route('schedule.update', $schedule->id) }}">
                      @csrf
                      @method('put')
                            <div class="form-group">
                                <label>Tanggal/hari</label>
                                <input type="text" name="day" class="form-control datepicker2" value="{{ $schedule->plainDate() }}">
                                @if ($errors->has('day'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('day') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="text" name="time" class="form-control" value="{{ $schedule->time }}">
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
                                    <option {{ ($schedule->course_id === $course->id) ? 'selected':'' }} value="{{ $course->id }}">{{ $course->name }}</option>
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
                                <select class="form-control" name="lecturer_id">
                                  <option value="">Pilih Kelas</option>
                                  @foreach ($classes as $class)
                                    <option {{ ($schedule->class_id === $class->id) ? 'selected':'' }} value="{{ $class->id }}">{{ $class->name }}</option>
                                  @endforeach
                                </select>
                                @if ($errors->has('course_id'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('course_id') }}</strong>
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
