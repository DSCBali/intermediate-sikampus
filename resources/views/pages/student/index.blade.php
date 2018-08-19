@extends('layouts.app')
@section('content')
    <h5>Data Mahasiswa</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="{{route('student.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th style="">Nama</th>
                                        <th style="">NIM</th>
                                        <th style="">Alamat</th>
                                        <th style="">Nomor HP</th>
                                        <th style="">Tanggal Lahir</th>
                                        <th>Ket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($students as $data)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->name}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->nim}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->address}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->phone}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{\Carbon\Carbon::parse($data->dob)->format('d F Y')}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold"><a href="{{route('student.edit',['id'=>$data->id])}}" class="btn btn-warning btn-small">Edit</a>
                                          <form method="post" action="{{route ('student.destroy',['id' =>$data->id] )}}">
                                            @csrf
                                            @method('DELETE')
                                          <button type="submit" class="btn btn-danger btn-small" onclick="return confirm('yakin ingin hapus ?')">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection
