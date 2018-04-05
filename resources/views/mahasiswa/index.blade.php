@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/mahasiswa/create') }}" class="btn btn-primary btn-sm">Tambah Mahasiswa<i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Mahasiswa</th>
              <th>NIM</th>
              {{-- <th>Jurusan</th> --}}
              <th>Alamat</th>
              <th>TTL</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($mahasiswas as $mahasiswa)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $mahasiswa->nama_mahasiswa }}</td>
              <td>{{ $mahasiswa->nim }}</td>
             
              <td>{{ $mahasiswa->alamat }}</td>
              <td>{{ $mahasiswa->ttl }}</td>
              <td>
                <a href="{{ route('mahasiswa.edit', $mahasiswa) }}" class="btn btn-info btn-xs" style="float:left;">Update</a>
                <form action="{{ route('mahasiswa.destroy',$mahasiswa) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-xs" style="margin-left:3px;">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()