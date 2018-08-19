@extends('component.layouts.sidebar')
@section('content')
    <h5>Edit Profile Staff</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">
            <div class="card-body">
                    <form action="/profile/{{$users->id}}" method="post">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="id" value="{{$users->id}}" class="form-control" required="" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" value="{{$users->name}}" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <span class="help">"Tahun - Bulan - Hari" contoh "1998-05-04"</span>
                                <input type="text" name="dob" value="{{$users->dob}}" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <span class="help">"contoh "081234567891"</span>
                                <input type="text" name="phone" value="{{$users->phone}}" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text" name="id" value="{{$users->gender}}" class="form-control" required="" readonly>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="{{$users->username}}" class="form-control" required="" readonly>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" value="{{$users->password}}" class="form-control" required="">
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
