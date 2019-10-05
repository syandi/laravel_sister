<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view('siswa.index', ['siswa' => Siswa::all()]);
    }
}
