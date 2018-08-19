@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul style="list-style:none;">
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
                    <h2>Tambah Daftar Mata Kuliah</h2>
                    <form action="{{route('course.store')}}" method="POST">
                      @csrf
                            <div class="form-group">
                                <label>Nama mata kuliah</label>
                                <input type="text" class="form-control" required="" name="name">
                            </div>
                            <div class="form-group">
                                <label>Dosen yang Mengajar</label>
                                <select class="form-control" name="lecturer_id" required>
                                  @foreach ($lecturer as $l)
                                  <option value="{{$l->id}}">{{$l->name}}</option>
                                  @endforeach
                                </select>
                            </div>

                            <button class="btn btn-success btn-con" type="submit">Simpan</button>
                            <button class="btn btn-default btn-con">Batal</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
