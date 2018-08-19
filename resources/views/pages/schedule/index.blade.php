@extends('layouts.app')
@section('content')
    <h5>Data Jadwal</h5>
    <div id="card-advance" class="card card-default">
          @include('partials.alert')
            <div class="card-body">
                <a href="{{route('schedule.create')}}" class="text-right pull-right btn btn-complete btn-cons">Tambah Baru</a>
                    <div class="table-responsive">
                            <table class="table table-striped" id="stripedTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Hari</th>
                                        <th>Waktu</th>
                                        <th>Matakuliah</th>
                                        <th>Kelas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($schedules as $schedule)
                                    <tr>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $loop->iteration }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $schedule->day }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $schedule->time }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $schedule->course->name }}</p>
                                        </td>
                                        <td class="v-align-middle semi-bold">
                                            <p>{{ $schedule->class->name }}</p>
                                        </td>
                                        <td class="v-align-middle">
                                          <div class="btn-group">
                                            <a href="{{ route('schedule.edit',$schedule->id) }}" class="btn btn-sm">Edit</a>
                                            <a href="#" data-url="{{ route('schedule.destroy',$schedule->id) }}" class="btn btn-danger btn-sm delete-link">Hapus</a>
                                          </div>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $schedules->links() }}
            </div>
        </div>
        @include('partials.delete-confirmation-modal')
@endsection
