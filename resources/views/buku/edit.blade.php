@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading"><?=$title?></div>
          <div class="panel-body">
            <form action="{{ route('buku.update',$buku) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
                <div class="form-group">
                  <label for="">Judul Buku</label>
                <input type="text" class="form-control" name="judul_buku" placeholder="Masukan Judul Buku" value="{{$buku->judul_buku}}">
                </div>
                <div class="form-group">
                  <label for="">Pengarang</label>
                  <input type="text" class="form-control" name="pengarang" placeholder="Masukan Pengarang Buku" value="{{$buku->pengarang}}">
                </div>
                <div class="form-group">
                  <label for="">Jenis Buku</label>
                  <input type="text" class="form-control" name="jenis_buku" placeholder="Masukan Jenis Buku" value="{{$buku->jenis_buku}}">
                </div>
                <div class="form-group">
                  <label for="">Penerbit</label>
                  <input type="text" class="form-control" name="penerbit" placeholder="Masukan Penerbit Buku" value="{{$buku->penerbit}}">
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