@extends('layouts.app')
@section('content')
    <h5>Data Staff</h5>
    <div id="card-advance" class="card card-default">
          @include('partials.alert')
            <div class="card-body">
                <a href="{{route('staff.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Telp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($staffs as $staff)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $loop->iteration }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $staff->name }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $staff->genre }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $staff->phone }}</p>
                                        </td>
                                        <td class="v-align-middle">
                                          <div class="btn-group">
                                            <a href="{{ route('staff.edit',$staff->id) }}" class="btn btn-sm">Edit</a>
                                            <a href="#" data-url="{{ route('staff.destroy',$staff->id) }}" class="btn btn-danger btn-sm delete-link">Hapus</a>
                                          </div>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $staffs->links() }}
            </div>
        </div>
        @include('partials.delete-confirmation-modal')
@endsection
