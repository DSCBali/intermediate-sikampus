@extends('layouts.app')
@section('content')
    <h5>Cek Jadwal</h5>
    <div id="card-advance" class="card card-default">

        <div class="card-body">


            <div class="table-responsive">
                <table class="table table-striped" id="stripedTable">

                    <thead>
                    <tr>

                        <th style="">Nim</th>
                        <th style="">Nama</th>
                        <th style="">Phone</th>
                        <th style="">Mata Kuliah</th>
                        <th style="">Hari</th>
                        <th style="">Jam</th>
                        <th style="">Kelas</th>
                        <th style="">Pengajar</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($jadwals as $data)
                        <tr>

                            <td class="v-align-middle semi-bold">
                                <p>{{$data->nim}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->name}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->phone}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->name_courses}}</p>
                            </td>

                            <td class="v-align-middle semi-bold">
                                <p>{{$data->day}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->time}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->name_kls}}</p>
                            </td>
                            <td class="v-align-middle semi-bold">
                                <p>{{$data->name_lecture}}</p>
                            </td>


                            <td class="v-align-middle semi-bold">




                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

