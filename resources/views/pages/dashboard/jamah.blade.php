@extends('component.layouts.sidebar')
@section('content')
    <h5>Detail Jadwal</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="/create/jamah" class="text-right pull-right btn btn-complete btn-cons">Tambah Jadwal Mahasiswa</a>
                    <div class="table-responsive">
                            <table class="table" id="stripedTable">
                                  <thead>
                                    <tr>
                                        <th style="width:10%">ID</th>
                                        <th style="">NIM</th>
                                        <th style="">Jadwal</th>
                                        <th style="">Kelas</th>
                                        <th style="">Dosen</th>
                                        <th style="">Mata Kuliah</th>
                                        <th style="">Edit</th>
                                        <th style="">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      @foreach ($user as $users)
                                      <tr>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->id }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->nim }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->day }} ({{ $users->time }})</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->kls_name }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->name }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->mk_name }}</p>
                                      </td>
                                      <td class="v-align-middle">
                                        <a href="/jamah/{{$users->id}}/edit" class="btn btn-default btn-cons m-b-10">Edit</a>
                                      </td>
                                      <td class="v-align-middle">
                                        <form action="/jamah/{{$users->id}}" method="post">
                                          <input class="btn btn-default btn-cons m-b-10" type="submit" name="submit" value="delete">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
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
