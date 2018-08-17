@extends('layouts.app_admin')
@section('content')
    <h5>Data User</h5>
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


                                    </tr>
                                  @endforeach

                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection
