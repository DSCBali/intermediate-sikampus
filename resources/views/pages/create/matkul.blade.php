@extends('component.layouts.sidebar')
@section('content')
    <h5>Tambah Mata Kuliah</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form action="/matkul" method="post">
                            <div class="form-group">
                                <label>Nama Mata Kuliah</label>
                                <input type="text" name="name" placeholder="Nama Mata Kuliah" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>Banyak SKS</label>
                                <input type="text" name="sks" placeholder="Banyak SKS" class="form-control" required="">
                            </div>
                            <button class="btn btn-success btn-con">Simpan</button>
                                {{csrf_field()}}
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
