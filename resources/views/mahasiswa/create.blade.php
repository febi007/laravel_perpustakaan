@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ url('/mahasiswa/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nama Mahasiswa</label>
                  <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukan Nama Mahasiswa">
                </div>
                <div class="form-group">
                  <label for="">NIM</label>
                  <input type="text" class="form-control" name="nim" placeholder="Masukan NIM Mahasiswa">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Mahasiswa"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="">TTL</label>
                  <input type="text" class="form-control" name="ttl" placeholder="Masukan Tempat Tanggal Lahir Mahasiswa">
                </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                  <button type="reset" class="btn btn-default btn-sm">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()