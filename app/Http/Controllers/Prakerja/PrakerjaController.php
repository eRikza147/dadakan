<?php

namespace App\Http\Controllers\Prakerja;

use App\Http\Controllers\Controller;
use App\Http\Requests\Save;
use App\Models\prakerja;
use Illuminate\Http\Request;

class PrakerjaController extends Controller
{
    public function index(){
        $data['prakerjas']=prakerja::get();
        return view('prakerja/home',$data);
    }

    public function tambah(){
        return view('prakerja/tambah');
    }

    public function save(Save $r){
        if ($r->validated()) {
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('foto/', $foto);
            
            prakerja::create([
                'nama' => $r->nama,
                'email'=> $r->email,
                'telpon'=> $r->telpon,
                'alamat'=> $r->alamat,
                'pddkan'=> $r->pddkan,
                'foto' => $foto
            ]);
            return redirect('/')->with('pesan','Berhasil Diinputkan');
    }
    }

    public function hapus($id){
        prakerja::where('id',$id)->delete();
        return back();
    }
}