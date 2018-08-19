@extends('layouts.app')
@section('content')
    <h5>Tambah Data Kelas</h5>
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

              @if (Session::has('message'))
              <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" name="button">&times;</button>
                {{Session::get('message')}}
              </div>
              @endif
                    <form action="{{route('class.store')}}" method="POST">
                      @csrf
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <input type="text" class="form-control" required="" name="name">
                            </div>
                            <div class="form-group">
                                <label>Jumlah maksimal</label>
                                <input type="number" class="form-control" required="" name="max_students" min="0">
                            </div>
                            <button class="btn btn-success btn-con" type="submit">Simpan</button>
                            <button class="btn btn-default btn-con"><a href="{{route('class.index')}}">Batal</a></button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
