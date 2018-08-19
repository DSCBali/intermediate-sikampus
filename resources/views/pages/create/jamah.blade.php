@extends('component.layouts.sidebar')
@section('content')
    <h5>Tambah Jadwal</h5>
    <div class="row">
        <div class="col-md-6">


    <div id="card-advance" class="card card-default">

            <div class="card-body">
                    <form action="/jamah" method="post">
                            <div class="form-group">
                                <label>Mahasiswa</label>
                                <br>
                                <select name="mahasiswa" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                  @foreach($data as $datas)
                                <option value="{{$datas->id}}">{{$datas->nim}} ({{$datas->name}})</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                  <label>Jadwal</label>
                                  <br>
                                  <select name="jadwal" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                    @foreach($data1 as $datas1)
                                  <option value="{{$datas1->id}}">{{$datas1->day}} ({{$datas1->time}})</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <br>
                                    <select name="kelas" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                      @foreach($data2 as $datas2)
                                    <option value="{{$datas2->id}}">{{$datas2->kls_name}} ({{$datas2->max_students}})</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group">
                                      <label>Dosen</label>
                                      <br>
                                      <select name="dosen" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                        @foreach($data3 as $datas3)
                                      <option value="{{$datas3->id}}">{{$datas3->name}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Mata Kuliah</label>
                                        <br>
                                        <select name="matkul" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                                          @foreach($data4 as $datas4)
                                        <option value="{{$datas4->id}}">{{$datas4->mk_name}} ({{$datas4->sks}})</option>
                                          @endforeach
                                        </select>
                                      </div>

                            <button class="btn btn-success btn-con">Simpan</button>
                                {{csrf_field()}}
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
