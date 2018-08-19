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
                    <h2>Edit Daftar Mata Kuliah</h2>
                    <form action="{{route('course.update',['id' => $data->id])}}" method="POST">
                      @csrf
                      @method('PUT')
                            <div class="form-group">
                                <label>Nama mata kuliah</label>
                                <input type="text" class="form-control" required="" name="name" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                                <label>Dosen yang Mengajar</label>
                                <select class="form-control" name="lecturer_id" required>
                                  <option value="{{$data->lecturer_id}}">{{$data->course_lecture->name}}</option>
                                  @foreach ($lecturer as $l)
                                  <option value="{{$l->id}}">{{$l->name}}</option>
                                  @endforeach
                                </select>
                            </div>

                            <button class="btn btn-success btn-con" type="submit">Simpan</button>
                    </form>
                            <button class="btn btn-default btn-con"><a href="{{route('course.index')}}">Batal </a></button>
            </div>
        </div>
    </div>
</div>
@endsection
