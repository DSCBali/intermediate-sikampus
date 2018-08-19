@extends('component.layouts.kkelas')
@section('kelas')
<header id="header">
  <h1><a href="index.html">SIKAMPUS</a></h1>
  <nav id="nav">
    <ul>
      <li><a href="/" >Beranda</a></li>
      <li><a href="/kelas" class="button special">Perkuliahan</a></li>
      <li><a href="/kontak">Kontak Kami</a></li>
    </ul>
  </nav>
</header>

<!-- Main -->
<section id="main" class="wrapper">
<div class="container">

  <!-- Table -->
    <section>
      <header class="major"><h2>Tabel Jadwal Kuliah</h2></header>
      <div class="table-wrapper">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Hari</th>
              <th>Waktu</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $users)
            <tr>
            <td  >
                <p>{{ $users->id }}</p>
            </td>
            <td  >
                <p>{{ $users->day }}</p>
            </td>
            <td  >
                <p>{{ $users->time }}</p>
            </td>

            <td  >
                <a href="#" class="button alt small">Lihat</a>
            </td>
        </tr>
        @endforeach
          </tbody>
        </table>
      </div>
    </section>
</div>
</section>
<section id="three" class="wrapper style3 special">
  <div class="container">
    <header class="major">
      <h2>Cari Kelas</h2>
      <p>Masukan NIM pada form di bawah ini untuk mengetahui kelas. </p>
    </header>
  </div>
  <div class="container 50%">
    <form action="#" method="post">
      <div class="row uniform">
        <div class="12u$">
          <input name="text" id="email" value="" placeholder="Nomor Induk Mahasiswa" type="email" width="200px">
        </div>
        <div class="12u$">
          <ul class="actions">
            <li><input value="Cek Kelas" class="special big" type="submit"></li>
          </ul>
        </div>
      </div>
    </form>
  </div>
</section>
@endsection
