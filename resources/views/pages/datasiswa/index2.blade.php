@extends('layouts.app_admin')
@section('content')
    @if(\Session::has('alert'))
        <div class="alert alert-danger">
            <div>{{Session::get('alert')}}</div>
        </div>
    @endif
    @if(\Session::has('alert-success'))
        <div class="alert alert-success">
            <div>{{Session::get('alert-success')}}</div>
        </div>
    @endif
    <h5>Data Siswa</h5>
    <div id="card-advance" class="card card-default">

        <div class="card-body">
            <a href="{{route('user.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
            <div class="table-responsive">
                <table class="table table-striped" id="stripedTable">
                    <thead>
                    <tr>


                        <th style="">Nim</th>
                        <th style="">Nama</th>
                        <th style="">Date Of Birth</th>
                        <th style="">Phone</th>
                        <th style="">Address</th>
                        <th style="">Gender</th>
                        <th style="">Pilihan</th>



                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $data)


                        <tr>

                            <td class="v-align-middle semi-bold">
                                <p>{{$data->nim}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->name}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->dob}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->phone}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->address}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->gender}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">

                                <form method="post" action="/siswa/{id}/destroy">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                    <button type="submit" onclick="return confirm('Yakin Ingin Menghapus Data?')">Delete</button>


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
