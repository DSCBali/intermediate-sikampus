@extends('component.layouts.sidebar')
@section('content')
    <h5>Tambah Jadwal</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form action="/schedule" method="post">
                            <div class="form-group">
                                <label>Hari</label>
                                <br>
                                <select name="day" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
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
                                <span class="help">contoh "08.00 - 09.40"</span>
                                <input type="text" name="time" placeholder="08.00 - 09.40" class="form-control" required="">
                            </div>
                            <button class="btn btn-success btn-con">Simpan</button>
                                {{csrf_field()}}
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
