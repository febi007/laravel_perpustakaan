@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/buku/create') }}" class="btn btn-primary btn-sm">Tambah Buku <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Jenis Buku</th>
              <th>Penerbit</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($bukus as $b)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $b->judul_buku }}</td>
              <td>{{ $b->pengarang }}</td>
              <td>{{ $b->jenis_buku }}</td>
              <td>{{ $b->pengarang }}</td>
              <td>
                <a href="{{ route('buku.edit', $b) }}" class="btn btn-info btn-xs" style="float:left;">Update</a>
                <form action="{{ route('buku.destroy',$b) }}" method="post">
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