@extends('layouts.app')
@section('content')
    <h5>Data Matakuliah</h5>
    <div id="card-advance" class="card card-default">
          @include('partials.alert')
            <div class="card-body">
                <a href="{{route('course.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Matakuliah</th>
                                        <th>Pengajar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($courses as $course)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $loop->iteration }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $course->name }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $course->lecturer->name }}</p>
                                        </td>
                                        <td class="v-align-middle">
                                          <div class="btn-group">
                                            <a href="{{ route('course.edit',$course->id) }}" class="btn btn-sm">Edit</a>
                                            <a href="#" data-url="{{ route('course.destroy',$course->id) }}" class="btn btn-danger btn-sm delete-link">Hapus</a>
                                          </div>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $courses->links() }}
            </div>
        </div>
        @include('partials.delete-confirmation-modal')
@endsection
