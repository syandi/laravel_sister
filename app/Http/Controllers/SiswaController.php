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

    public function edit($id){
        $siswa = Siswa::find($id);
        return view('siswa.edit', ['siswa' => $siswa, 'id' => $id]);
    }

    public function update(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->nik = $request->nik;
        $siswa->nama = $request->nama;
        $siswa->keterangan = $request->keterangan;
        
        $siswa->save();

        return redirect('/siswa');
    }

    public function destroy($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('/siswa');
    }
}
