@extends('layouts.app')
@section('content')
    <h5>Daftar Dosen</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="{{route('lecturer.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th style="">Nama</th>
                                        <th style="">Alamat</th>
                                        <th>Nomor HP</th>
                                        <th>Gender</th>
                                        <th>Tanggal lahir</th>
                                        <th>Mata Kuliah yang diajar</th>
                                        <th>ket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php(
                                  $no = 1
                                  )
                                  @foreach ($lecturers as $data)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                          <p>{{$no++}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->name}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->address}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->phone}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->gender}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{\Carbon\Carbon::parse($data->dob)->format('d F Y')}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>tes</p>
                                        </td>

                                        <td class="v-align-middle semi-bold"><a href="{{route('lecturer.edit',['id'=>$data->id])}}" class="btn btn-warning btn-small">Edit</a>
                                          <form method="post" action="{{route ('lecturer.destroy',['id' =>$data->id] )}}">
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
