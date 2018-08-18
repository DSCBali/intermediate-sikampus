@extends('layouts.app_admin')
@section('content')

    <h1 class="card-body">Data Mahasiswa</h1>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                {{--<a href="{{route('user.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>--}}
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">

                                <thead>
                                    <tr>

                                        <th style="">No</th>
                                        <th style="">Nim</th>
                                        <th style="">Nama</th>
                                          <th style="">Date Of Birth</th>
                                          <th style="">Phone</th>
                                          <th style="">Address</th>

                                          <th style="">Gender</th>
                                          {{--<th style="">Pilihan</th>--}}




                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                  @foreach($students as $data)

                                    <tr>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{$no++}}</p>
                                      </td>
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
                                        {{--<td class="v-align-middle semi-bold">--}}

                                            {{--<form method="post" action="{{ route('siswa.destroy' , $data -> id ) }}">--}}

                                                {{--{{csrf_field()}}--}}
                                                {{--{{method_field('DELETE')}}--}}

                                                {{--<p class="v-align-middle semi-bold"><a href="{{ route('siswa.edit' , $data->id) }}" class=" btn btn-sm btn-primary">Edit</a></p>--}}

                                                {{--<button type="submit" onclick="return confirm('Yakin Ingin Menghapus Data?')">Delete</button>--}}


                                            {{--</form>--}}

                                        {{--</td>--}}


                                    </tr>
                                  @endforeach

                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection
