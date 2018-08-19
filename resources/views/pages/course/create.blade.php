@extends('layouts.app')
@section('content')
    <h5>Tambah Matakuliah</h5>
    <div class="row">
        <div class="col-md-6">
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form method="post" action="{{ route('course.store') }}">
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
                                <label>Dosen Pengajar</label>
                                <select class="form-control" name="lecturer_id">
                                  <option value="">Pilih Dosen</option>
                                  @foreach ($lecturers as $lecturer)
                                    <option {{ (old('lecturer_id') === $lecturer->id) ? 'selected':'' }} value="{{ $lecturer->id }}">{{ $lecturer->name }}</option>
                                  @endforeach
                                </select>
                            </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                            <a class="btn btn-default btn-con" href="{{ route('course.index') }}">Batal</a>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
