<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $fillable = ['buku_id','mahasiswa_id','jurusan_id','tgl_peminjaman','tgl_pengembalian','jumlah_peminjaman'];
}
