<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilaikuliah
        $nilaikuliah = DB::table('nilaikuliah')->get();

        // mengirim data nilaikuliah ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah data
    public function tambah()
    {
        // memanggil view tambah
        return view('nilaikuliah.tambah');
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }
}
