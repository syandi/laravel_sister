<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        return view('student.index', ['siswa' => Student::all()]);
    }
}
