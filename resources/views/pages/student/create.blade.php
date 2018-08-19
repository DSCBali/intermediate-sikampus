@extends('layouts.app')
@section('content')
    <h5>Tambah Data Mahasiswa</h5>
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
                    <form action="{{route('student.store')}}" method="POST">
                      @csrf
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" class="form-control" required="" name="nim">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" required="" name="name">
                            </div>
                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input type="date" class="form-control" required="" name="dob">
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="number" class="form-control" required="" name="phone" min="0">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" required="" name="address"> </textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="gender" required>
                                  <option value="Laki laki">Laki laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <button class="btn btn-success btn-con" type="submit">Simpan</button>
                            <button class="btn btn-default btn-con"><a href="{{route('student.index')}}">Batal</a></button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
