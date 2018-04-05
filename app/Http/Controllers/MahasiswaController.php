<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;
// use App\Jurusan;
// use DB;
class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::All();
        // $mahasiswas = DB::table('mahasiswas')
        //     ->join('jurusans', 'jurusans.id', '=', 'mahasiswas.jurusan_id')
        //     ->get();
        $data = array(
            'title'         => 'Data Mahasiswa',
            'no'            => 1,
            'mahasiswas'    => $mahasiswas
        );
        return view('mahasiswa.index',$data);
    }
    public function create()
    {
        // $jurusan      = Jurusan::All();
        $data = array(
            'title'         => 'Tambah Data Mahasiswa',
            // 'jurusan'       => $jurusan
        );
        return view('mahasiswa.create',$data);
    }
    public function store()
    {
     Mahasiswa::create([
        //  'jurusan_id'       => request('jurusan_id'),
         'nama_mahasiswa'   => request('nama_mahasiswa'),
         'nim'              => request('nim'),
         'ttl'              => request('ttl'),
         'alamat'           => request('alamat'),
     ]);
     return redirect('/mahasiswa');
    }
    public function edit(Mahasiswa $mahasiswa)
    {
        // $jurusan      = Jurusan::All();
        $data = array(
            'title'     => 'edit data jurusan',
            'mahasiswa' => $mahasiswa,
            // 'jurusan'   => $jurusan
        );
        return view('mahasiswa.edit',$data);
    }
    public function update(Mahasiswa $mahasiswa)
    {   
        $mahasiswa->update([
            // 'jurusan_id'        => request('jurusan_id'),
            'nama_mahasiswa'    => request('nama_mahasiswa'),
            'nim'               => request('nim'),
            'ttl'               => request('ttl'),
            'alamat'            => request('alamat')
        ]);
        return redirect('/mahasiswa');
    }
    public function destroy(Mahasiswa $mahasiswa){
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index');
    }
}
