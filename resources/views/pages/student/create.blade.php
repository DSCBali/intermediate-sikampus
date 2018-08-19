@extends('layouts.app')
@section('content')
    <h5>Tambah Mahasiswa</h5>
    <div class="row">
        <div class="col-md-6">
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ route('student.store') }}">
                      @csrf
                            <div class="form-group">
                                <label>Nama Mahasiswa</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label style="display: block">Jenis Kelamin</label>
                                <label>
                                  <input type="radio" name="genre" {{ (old('genre') == 1) ? 'checked':'' }} value="1"> Laki - laki
                                </label>
                                <label>
                                  <input type="radio" name="genre" {{ (old('genre') == 0) ? 'checked':'' }} value="0"> Perempuan
                                </label>
                                @if ($errors->has('genre'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('genre') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                              <label for="">Tanggal Lahir</label>
                              <input type="text" autocomplete="off" class="form-control datepicker" name="dob" value="{{ old('dob') }}">
                              @if ($errors->has('dob'))
                                  <span class="badge badge-danger">
                                      <strong>{{ $errors->first('dob') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="">No Telp</label>
                              <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                              @if ($errors->has('phone'))
                                  <span class="badge badge-danger">
                                      <strong>{{ $errors->first('phone') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="">Address</label>
                              <textarea name="address" class="form-control" rows="8">{{ old('address') }}</textarea>
                              @if ($errors->has('adddress'))
                                  <span class="badge badge-danger">
                                      <strong>{{ $errors->first('adddress') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="">Kelas</label>
                              <select class="form-control" name="class_id">
                                <option value="">Pilih Kelas</option>
                                @foreach ($classes as $class)
                                  @if ($class->classAvailable())
                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                  @endif
                                @endforeach
                              </select>
                              @if ($errors->has('class_id'))
                                  <span class="badge badge-danger">
                                      <strong>{{ $errors->first('class_id') }}</strong>
                                  </span>
                              @endif
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{ route('student.index') }}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
