<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{  
    public function index()
    {
        $mahasiswa = Mahasiswa::All();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return "halo saya create, dari mahasiswa controller";
    }
}
