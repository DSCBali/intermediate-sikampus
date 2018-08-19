@extends('component.layouts.sidebar')
@section('content')
    <h5>Schedule</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="/create/schedule" class="text-right pull-right btn btn-complete btn-cons">Tambah Jadwal</a>
                    <div class="table-responsive">
                            <table class="table" id="stripedTable">
                                  <thead>
                                    <tr>
                                        <th style="width:10%">ID</th>
                                        <th style="">Hari</th>
                                        <th style="">Waktu</th>
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
                                          <p>{{ $users->day }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->time }}</p>
                                      </td>
                                      <td class="v-align-middle">
                                        <a href="/schedule/{{$users->id}}/edit" class="btn btn-default btn-cons m-b-10">Edit</a>
                                      </td>
                                      <td class="v-align-middle">
                                        <form action="/schedule/{{$users->id}}" method="post">
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
