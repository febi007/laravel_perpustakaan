<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jurusan;

class JurusanController extends Controller
{
    public function index(){
        $jurusans = Jurusan::All();
        $data = array(
            'title'     => 'Data Jurusan',
            'jurusans'  => $jurusans,
            'no'        => 1
        );
        return view('jurusan.index',$data);
    }
    public function create(){
        $data = array('title'   => 'Tambah Jurusan');
        return view('jurusan.create',$data);
    }
    public function store(){
        Jurusan::create([
            'nama_jurusan'      => request('nama_jurusan')
        ]);
        return redirect('/jurusan');
    }
    public function edit(Jurusan $jurusan){
        $data = array(
            'title'   => 'edit data jurusan',
            'jurusan' => $jurusan
        );
        return view('jurusan.edit',$data);
    }
    public function update(Jurusan $jurusan)
    {   
        $jurusan->update([
            'nama_jurusan'      => request('nama_jurusan')
        ]);
        return redirect('/jurusan');
    }
    public function destroy(Jurusan $jurusan){
        $jurusan->delete();
        return redirect()->route('jurusan.index');
    }
}
