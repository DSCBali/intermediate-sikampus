@extends('component.layouts.sidebar')
@section('content')
    <h5>Data Staff</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="staff/create" class="text-right pull-right btn btn-complete btn-cons">Tambah Staff</a>
                    <div class="table-responsive">
                            <table class="table" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th style="width:10%">ID</th>
                                        <th style="">Nama</th>
                                        <th style="">Tanggal Lahir</th>
                                        <th style="">Telephone</th>
                                        <th style="">Jenis Kelamin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      @foreach ($user as $users)
                                      <tr>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->id }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->name }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->dob }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->phone }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->gender }}</p>
                                      </td>
                                  </tr>
                                      @endforeach
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection
