@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ url('/pinjam/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Judul Buku</label>
                  <select name="buku_id" id="" class="form-control">
                    @foreach($bukus as $b)
                    <option value="<?=$b->id?>"><?=$b->judul_buku?></option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Nama Mahasiswa</label>
                  <select name="mahasiswa_id" id="" class="form-control">
                    @foreach($mahasiswas as $m)
                    <option value="<?=$m->id?>"><?=$m->nama_mahasiswa?></option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Jurusan</label>
                  <select name="jurusan_id" id="" class="form-control">
                    @foreach($jurusans as $j)
                    <option value="<?=$j->id?>"><?=$j->nama_jurusan?></option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Peminjaman</label>
                    <input type="text" class="form-control" name="jumlah_peminjaman">
                  </div>
                <div class="form-group">
                  <label for="">Tgl Peminjaman</label>
                  <input type="text" class="form-control" name="tgl_peminjaman">
                </div>
                <div class="form-group">
                    <label for="">Tgl Pengembalian</label>
                    <input type="text" class="form-control" name="tgl_pengembalian">
                  </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()