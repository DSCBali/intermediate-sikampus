@extends('layouts.app')
@section('content')
    <h5>Daftar Kelas</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="{{route('class.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th style="">Nama</th>
                                        <th style="">Jumlah maksimal</th>
                                        <th>Ket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php(
                                  $no = 1
                                  )
                                  @foreach ($classes as $data)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                          <p>{{$no}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->name}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$data->max_students}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold"><a href="{{route('class.edit',['id'=>$data->id])}}" class="btn btn-warning btn-small">Edit</a>
                                          <form method="post" action="{{route ('class.destroy',['id' =>$data->id] )}}">
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
