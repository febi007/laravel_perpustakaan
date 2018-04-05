<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['judul_buku','pengarang','jenis_buku','penerbit'];
}
