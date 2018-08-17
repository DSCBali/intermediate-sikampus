@extends('layouts.app')
@section('content')
    <h5>Data Kelas</h5>
    <div id="card-advance" class="card card-default">
          @include('partials.alert')
            <div class="card-body">
                <a href="{{route('class.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kelas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($classes as $class)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $loop->iteration }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $class->name }}</p>
                                        </td>
                                        <td class="v-align-middle">
                                          <div class="btn-group">
                                            <a href="{{ route('class.edit',$class->id) }}" class="btn btn-sm">Edit</a>
                                            <a href="#" data-url="{{ route('class.destroy',$class->id) }}" class="btn btn-danger btn-sm delete-link">Hapus</a>
                                          </div>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $classes->links() }}
            </div>
        </div>
        @include('partials.delete-confirmation-modal')
@endsection
