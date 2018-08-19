@extends('component.layouts.sidebar')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form action="/dosen/{{$users->id}}" method="post">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="name" value="{{$users->id}}" class="form-control" required="" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" name="name" value="{{$users->name}}" class="form-control" required="" >
                            </div>
                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <span class="help">"Tahun - Bulan - Hari" contoh "1998-05-04"</span>
                              <input type="text" name="dob" value="{{$users->dob}}" class="form-control" required="" >
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" name="phone" value="{{$users->phone}}" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="address" value="{{$users->address}}" class="form-control" required="">
                            </div>
                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                                <input type="text" name="gender" value="{{$users->gender}}" class="form-control" required="" readonly>
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
