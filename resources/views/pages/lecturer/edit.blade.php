@extends('layouts.app')
@section('content')
    <h5>Edit Dosen</h5>
    <div class="row">
        <div class="col-md-6">
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ route('lecturer.update', $lecturer->id) }}">
                      @csrf
                      @method('put')
                            <div class="form-group">
                                <label>Nama Dosen</label>
                                <input type="text" name="name" class="form-control" value="{{ $lecturer->name }}">
                                @if ($errors->has('name'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label style="display: block">Jenis Kelamin</label>
                                <label>
                                  <input type="radio" name="genre" {{ ($lecturer->plainGenre() == 1) ? 'checked':'' }} value="1"> Laki - laki
                                </label>
                                <label>
                                  <input type="radio" name="genre" {{ ($lecturer->plainGenre() == 0) ? 'checked':'' }} value="0"> Perempuan
                                </label>
                                @if ($errors->has('max_lecturers'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('max_lecturers') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                              <label for="">Tanggal Lahir</label>
                              <input type="text" autocomplete="off" class="form-control datepicker" name="dob" value="{{ $lecturer->dob }}">
                              @if ($errors->has('dob'))
                                  <span class="badge badge-danger">
                                      <strong>{{ $errors->first('dob') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="">No Telp</label>
                              <input type="text" class="form-control" name="phone" value="{{ $lecturer->phone }}">
                              @if ($errors->has('phone'))
                                  <span class="badge badge-danger">
                                      <strong>{{ $errors->first('phone') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="">Address</label>
                              <textarea name="address" class="form-control" rows="8">{{ $lecturer->address }}</textarea>
                              @if ($errors->has('adddress'))
                                  <span class="badge badge-danger">
                                      <strong>{{ $errors->first('adddress') }}</strong>
                                  </span>
                              @endif
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{ route('lecturer.index') }}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
