@extends('component.layouts.sidebar')
@section('content')
    <h5>Tambah Kelas</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form action="/class" method="post">
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <input type="text" name="name" placeholder="Nama Kelas" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Maksimal Isi Kelas</label>
                                <input type="text" name="maxs" placeholder="Maksimal Isi Kelas" class="form-control" required="">
                            </div>
                            <button class="btn btn-success btn-con">Simpan</button>
                                {{csrf_field()}}
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
