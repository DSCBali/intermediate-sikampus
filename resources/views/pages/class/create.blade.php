@extends('layouts.app')
@section('content')
    <h5>Tambah Kelas</h5>
    <div class="row">
        <div class="col-md-6">
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ route('class.store') }}">
                      @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Maksimal murid</label>
                                <input type="number" name="max_students" class="form-control" value="{{ old('max_students') }}">
                                @if ($errors->has('max_students'))
                                    <span class="badge badge-danger">
                                        <strong>{{ $errors->first('max_students') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{ route('class.index') }}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
