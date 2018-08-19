@extends('layouts.app')
@section('content')
    <h5>Daftar Mata Kuliah </h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="{{route('course.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th style="">Nama Mata Kuliah</th>
                                        <th style="">Dosen pengajar</th>
                                        <th>Ket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @php(
                                  $no = 1
                                  )
                                  @foreach ($courses as $a)
                                    <tr>

                                        <td class="v-align-middle semi-bold">
                                            <p>{{$no++}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$a->name}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{$a->get_lecturer->name}}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold"><a href="{{route('course.edit',['id'=>$a->id])}}" class="btn btn-warning btn-small">Edit</a>
                                          <form method="post" action="{{route ('lecturer.destroy',['id' =>$a->id] )}}">
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
