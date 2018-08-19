@extends('layouts.app')
@section('content')
    <h5>Edit Staff</h5>
    <div class="row">
        <div class="col-md-6">
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ route('staff.update', $staff->id) }}">
                      @csrf
                      @method('put')
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $staff->name }}">
                                @if ($errors->has('name'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label style="display: block">Jenis Kelamin</label>
                                <label>
                                  <input type="radio" name="genre" {{ ($staff->plainGenre() == 1) ? 'checked':'' }} value="1"> Laki - laki
                                </label>
                                <label>
                                  <input type="radio" name="genre" {{ ($staff->plainGenre() == 0) ? 'checked':'' }} value="0"> Perempuan
                                </label>
                                @if ($errors->has('max_staffs'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('max_staffs') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                              <label for="">Tanggal Lahir</label>
                              <input type="text" autocomplete="off" class="form-control datepicker" name="dob" value="{{ $staff->dob }}">
                              @if ($errors->has('dob'))
                                  <span class="badge badge-danger">
                                      <strong>{{ $errors->first('dob') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="">No Telp</label>
                              <input type="text" class="form-control" name="phone" value="{{ $staff->phone }}">
                              @if ($errors->has('phone'))
                                  <span class="badge badge-danger">
                                      <strong>{{ $errors->first('phone') }}</strong>
                                  </span>
                              @endif
                            </div>
                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{ route('staff.index') }}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
