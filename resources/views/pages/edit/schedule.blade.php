@extends('component.layouts.sidebar')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
              <form action="/schedule/{{$users->id}}" method="post">
                      <div class="form-group">
                          <label>ID</label>
                          <input type="text" name="id" value="{{$users->id}}" class="form-control" required="" readonly>
                      </div>
                      <div class="form-group">
                          <label>Hari</label>
                          <br>
                          <select name="day" class="cs-select cs-skin-slide" data-init-plugin="cs-select" value="{{$users->day}}">
                          <option value="Senin">Senin</option>
                          <option value="Selasa">Selasa</option>
                          <option value="Rabu">Rabu</option>
                          <option value="Kamis">Kamis</option>
                          <option value="Jumat">Jumat</option>
                          <option value="Sabtu">Sabtu</option>
                          <option value="Minggu">Minggu</option>
                          </select>
                        </div>
                      <div class="form-group">
                          <label>Waktu</label>
                          <input type="text" name="time" value="{{$users->time}}" class="form-control" required="">
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
