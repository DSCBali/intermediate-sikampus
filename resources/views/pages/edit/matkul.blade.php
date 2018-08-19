@extends('component.layouts.sidebar')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
              <form action="/matkul/{{$users->id}}" method="post">
                      <div class="form-group">
                          <label>ID</label>
                          <input type="text" name="id" value="{{$users->id}}" class="form-control" required="" readonly>
                      </div>
                      <div class="form-group">
                          <label>Nama Mata Kuliah</label>
                          <input type="text" name="name" value="{{$users->mk_name}}" class="form-control" required="">
                      </div>
                      <div class="form-group">
                          <label>Banyak SKS</label>
                          <input type="text" name="sks" value="{{$users->sks}}" class="form-control" required="">
                      </div>
                      <button class="btn btn-success btn-con">Simpan</button>
                          {{csrf_field()}}
                          <input type="hidden" name="_method" value="PUT">
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
