@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/jurusan/create') }}" class="btn btn-primary btn-sm">Tambah Jurusan<i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Jurusan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($jurusans as $j)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $j->nama_jurusan }}</td>
              <td>
                <a href="{{ route('jurusan.edit', $j) }}" class="btn btn-info btn-xs" style="float:left;">Update</a>
                <form action="{{ route('jurusan.destroy',$j) }}" method="post">
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