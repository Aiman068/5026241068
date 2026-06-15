<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class mypegawaiController extends Controller
{
    public function mypegawai()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); // jika tidak pakai paginate
        $mypegawai = DB::table('mypegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('indexmypegawai',['mypegawai' => $mypegawai]);
    }

     public function tambahmypegawai()
	{

		// memanggil view tambah
		return view('tambahmypegawai');

	}

    public function storemypegawai(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mypegawai')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/eas');
	}

     public function viewmypegawai($id)
    {

		$mypegawai = DB::table('mypegawai')->where('kodepegawai',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('viewmypegawai',['mypegawai' => $mypegawai]);
    }

}
