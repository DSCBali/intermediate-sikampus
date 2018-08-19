@extends('layouts.app')
@section('content')

    <h2>Jadwal Kuliah Hari Ini</h2>

    <div class="card card-default">
      <div class="card-body">
        <table class="table table-striped">
          <thead>
              <tr>
                <th>Matakuliah</th>
                <th>Dosen</th>
                <th>Jam</th>
              </tr>

              <tbody>
                @forelse ($student->studentClass->currentCourses as $schedule)
                  <tr>
                    <td>{{ $schedule->name }}</td>
                    <td>{{ $schedule->lecturer->name }}</td>
                    <td>{{ $schedule->pivot->time }}</td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="4">Tidak ada perkuliahan hari ini</td>
                  </tr>
                @endforelse
              </tbody>
          </thead>
        </table>
      </div>
    </div>

    <h2>Matakuliah Saya</h2>
    <div class="card card-default">
      <div class="card-body">
        <table class="table table-striped">
          <thead>
              <tr>
                <th>Matakuliah</th>
                <th>Dosen</th>
                <th>Jam</th>
                <th>Hari/tanggal</th>
              </tr>
          </thead>
          <tbody>
            @forelse ($student->studentClass->courses as $schedule)
              <tr>
                <td>{{ $schedule->name }}</td>
                <td>{{ $schedule->lecturer->name }}</td>
                <td>{{ $schedule->pivot->time }}</td>
                <td>{{ date('l, d m Y', strtotime($schedule->pivot->day)) }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="5">Belum ada jadwal</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
@endsection
