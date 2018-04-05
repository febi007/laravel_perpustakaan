@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/pinjam/create') }}" class="btn btn-primary btn-sm">Tambah Peminjamn<i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Mahasiswa</th>
              <th>Judul Buku</th>
              <th>Nama Jurusan</th>
              <th>Jumlah Peminjaman</th>
              <th>Tgl Pengembalian</th>
              <th>Tgl Pengembalian</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pinjams as $p)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$p->nama_mahasiswa}}</td>
              <td>{{$p->judul_buku}}</td>
              <td>{{$p->nama_jurusan}}</td>
              <td>{{$p->jumlah_peminjaman}}</td>
              <td>{{$p->tgl_peminjaman}}</td>
              <td>{{$p->tgl_pengembalian}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()