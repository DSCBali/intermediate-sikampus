@extends('component.layouts.sidebar')
@section('content')
    <h5>Kelas</h5>
    <div id="card-advance" class="card card-default">

            <div class="card-body">
                <a href="class/create" class="text-right pull-right btn btn-complete btn-cons">Tambah Kelas</a>
                    <div class="table-responsive">
                            <table class="table" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th style="width:10%">ID</th>
                                        <th style="">Nama Kelas</th>
                                        <th style="">Maksimal Kelas (orang)</th>
                                        <th style="">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      @foreach ($user as $users)
                                      <tr>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->id }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->kls_name }}</p>
                                      </td>
                                      <td class="v-align-middle semi-bold">
                                          <p>{{ $users->max_students }}</p>
                                      </td>
                                      <td class="v-align-middle">
                                        <a href="/class/{{$users->id}}/edit" class="btn btn-default btn-cons m-b-10">Edit</a>
                                        <form action="/class/{{$users->id}}" method="post">
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
