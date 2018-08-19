@extends('layouts.app')
@section('content')
    <h5>Data Dosen</h5>
    <div id="card-advance" class="card card-default">
          @include('partials.alert')
            <div class="card-body">
                <a href="{{route('lecturer.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Dosen</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Telp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($lecturers as $lecturer)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $loop->iteration }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $lecturer->name }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $lecturer->genre }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $lecturer->phone }}</p>
                                        </td>
                                        <td class="v-align-middle">
                                          <div class="btn-group">
                                            <a href="{{ route('lecturer.edit',$lecturer->id) }}" class="btn btn-sm">Edit</a>
                                            <a href="#" data-url="{{ route('lecturer.destroy',$lecturer->id) }}" class="btn btn-danger btn-sm delete-link">Hapus</a>
                                          </div>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $lecturers->links() }}
            </div>
        </div>
        @include('partials.delete-confirmation-modal')
@endsection
