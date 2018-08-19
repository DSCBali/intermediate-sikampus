@extends('component.layouts.sidebar')
@section('content')
    <h5>Tambah User</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form action="/class/{{$users->id}}" method="post">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="maxs" value="{{$users->id}}" class="form-control" required="" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <input type="text" name="name" value="{{$users->kls_name}}" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Maksimal Isi Kelas</label>
                                <input type="text" name="maxs" value="{{$users->max_students}}" class="form-control" required="">
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
