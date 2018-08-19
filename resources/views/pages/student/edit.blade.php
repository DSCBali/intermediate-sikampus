@extends('layouts.app')
@section('content')
    <h5>Edit Data Mahasiswa</h5>
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
                    <form action="{{route('student.update',['id' => $data->id])}}" method="POST">
                      @csrf
                      @method('PUT')
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" class="form-control" required="" name="nim" value="{{$data->nim}}" disabled>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" required="" name="name" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal lahir</label>
                                <input type="date" class="form-control" required="" name="dob" value="{{$data->dob}}">
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="number" class="form-control" required="" name="phone" value="{{$data->phone}}" min="0">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" required="" name="address">{{$data->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="gender" required>
                                  <option value="{{$data->gender}}">{{$data->gender}}</option>
                                  @if ($data->gender=="Perempuan")
                                  <option value="laki laki">laki laki</option>
                                  @else
                                  <option value="perempuan">perempuan</option>
                                  @endif
                                </select>
                            </div>

                            <button class="btn btn-success btn-con" type="submit">Simpan</button>
                            <button class="btn btn-default btn-con">Batal</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
