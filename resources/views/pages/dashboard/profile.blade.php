@extends('component.layouts.sidebar')
@section('content')
    <h5>Profile Staff Login</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                  <thead>
                                    <tr>
                                        <th style="width:10%">ID</th>
                                        <th style="">Nama</th>
                                        <th style="">Tanggal Lahir</th>
                                        <th style="">Telephone</th>
                                        <th style="">Jenis Kelamin</th>
                                        <th style="">Username</th>
                                        <th style="">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      <tr>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $user->id }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $user->name }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $user->dob }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $user->phone }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $user->gender }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $user->username }}</p>
                                      </td>
                                      <td class="v-align-middle">
                                        <a href="/profile/{{$user->id}}/edit" class="btn btn-default btn-cons m-b-10">Edit</a>
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
@endsection
