@extends('layouts.app')
@section('content')
    <h5>Data Mahasiswa</h5>
    <div id="card-advance" class="card card-default">
          @include('partials.alert')
            <div class="card-body">
                <a href="{{route('student.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIM</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Telp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($students as $student)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $loop->iteration }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $student->nim }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $student->name }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $student->genre }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $student->phone }}</p>
                                        </td>
                                        <td class="v-align-middle">
                                          <div class="btn-group">
                                            <a href="{{ route('student.edit',$student->id) }}" class="btn btn-sm">Edit</a>
                                            <a href="#" data-url="{{ route('student.destroy',$student->id) }}" class="btn btn-danger btn-sm delete-link">Hapus</a>
                                          </div>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $students->links() }}
            </div>
        </div>
        @include('partials.delete-confirmation-modal')
@endsection
