<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pinjam;
use App\Buku;
use App\Mahasiswa;
use App\Jurusan;
use DB;
class PinjamController extends Controller
{
    public function index(){
        $pinjams = Pinjam::All();
        $pinjams = DB::table('pinjams')
        ->join('bukus', 'bukus.id', '=', 'pinjams.buku_id')
        ->join('mahasiswas', 'mahasiswas.id', '=', 'pinjams.mahasiswa_id')
        ->join('jurusans', 'jurusans.id', '=', 'pinjams.jurusan_id')
        // ->join('couriers', 'couriers.id', '=', 'orders.courier_id')
        // ->select('users.*', 'contacts.phone', 'orders.price')
        ->get();
        $data = array(
            'title' => 'Data Peminjaman',
            'no'    => 1,
            'pinjams'   => $pinjams
        );
        return view('pinjam.index',$data);
    }
    public function create()
    {
        // $orders = Order::All();
        $bukus          = Buku::All();
        $mahasiswas     = Mahasiswa::All();
        $jurusans       = Jurusan::All();
        $data = array(
            'title'         => 'Tambah Peminjaman',
            'bukus'         => $bukus,
            'mahasiswas'    => $mahasiswas,
            'jurusans'      => $jurusans,
        );
        return view('pinjam.create',$data);
    }
    public function store()
    {
     Pinjam::create([
         'buku_id'          => request('buku_id'),
         'mahasiswa_id'     => request('mahasiswa_id'),
         'jurusan_id'       => request('jurusan_id'),
         'jumlah_peminjaman'=> request('jumlah_peminjaman'),
         'tgl_peminjaman'   => request('tgl_peminjaman'),
         'tgl_pengembalian' => request('tgl_pengembalian'),
     ]);
     return redirect('/pinjam');
    }
}
