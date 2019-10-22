<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view('siswa.index', ['siswa' => Siswa::all()]);
    }

    public function create(){
        return view('siswa.create');
    }
    public function store(Request $request) {
        $siswa = new Siswa();
        $siswa->nik = $request->nik;
        $siswa->nama = $request->nama;
        $siswa->keterangan = $request->keterangan;
        
        $siswa->save();

        return redirect('/siswa');
    }
}
