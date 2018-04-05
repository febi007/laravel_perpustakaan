<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Buku;

class BukuController extends Controller
{
    public function index(){
        $bukus = Buku::All();
        $data = array(
            'title'  => 'Data Buku',
            'bukus'  => $bukus,
            'no'     => 1
        );
        return view('buku.index',$data);
    }
    public function create(){
        $data = array('title'   => 'Tambah Buku');
        return view('buku.create',$data);
    }
    public function store(){
        Buku::create([
            'judul_buku'    => request('judul_buku'),
            'pengarang'     => request('pengarang'),
            'jenis_buku'    => request('jenis_buku'),
            'penerbit'      => request('penerbit'),
        ]);
        return redirect('/buku');
    }
    public function edit(Buku $buku){
        $data = array(
            'title'=> 'edit data buku',
            'buku' => $buku
        );
        return view('buku.edit',$data);
    }
    public function update(Buku $buku)
    {   
        $buku->update([
            'judul_buku'    => request('judul_buku'),
            'pengarang'     => request('pengarang'),
            'jenis_buku'    => request('jenis_buku'),
            'penerbit'      => request('penerbit')
        ]);
        return redirect('/buku');
    }
    public function destroy(Buku $buku){
        $buku->delete();
        return redirect()->route('buku.index');
    }
}
