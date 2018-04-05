@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/peminjaman/create') }}" class="btn btn-primary btn-sm">Tambah Peminjaman<i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Mahasiswas</th>
              <th>Nama Buku</th>
              <th>Jumlah Peminjaman</th>
              <th>Tgl Meminjam</th>
              <th>Tgl Kembali</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()