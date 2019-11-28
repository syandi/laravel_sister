<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $siswa = DB::table('siswa')->paginate(10);

        return view('siswa.index', ['siswa' => $siswa]);
    }

    public function create(){
        return view('siswa.create');
    }

    public function search(Request $request){
        $cari = $request->cari;

        $siswa = DB::table('siswa')
        ->where('nama','like',"%".$cari."%")
        ->paginate();

        return view('siswa.index', ['siswa' => $siswa]);
    }

    public function store(Request $request) {
        $siswa = new Siswa();
        $siswa->id = $request->id;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
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
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
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
