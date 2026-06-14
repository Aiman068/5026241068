<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel buku
        $data = DB::table('buku')->get();
        return view('buku.index', compact('data'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        // Menyimpan data baru ke tabel buku
        DB::table('buku')->insert([
            'merkbuku'  => $request->merkbuku,
            'stockbuku' => $request->stockbuku,
            'tersedia'  => $request->tersedia,
        ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Mencari data berdasarkan primary key 'kodebuku'
        $buku = DB::table('buku')->where('kodebuku', $id)->first();
        if (!$buku) abort(404);

        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        // Memperbarui data berdasarkan primary key 'kodebuku'
        DB::table('buku')->where('kodebuku', $id)->update([
            'merkbuku'  => $request->merkbuku,
            'stockbuku' => $request->stockbuku,
            'tersedia'  => $request->tersedia,
        ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Menghapus data berdasarkan primary key 'kodebuku'
        DB::table('buku')->where('kodebuku', $id)->delete();

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus!');
    }
}
