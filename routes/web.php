<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\mypegawaiController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('linktr', function () {
	return view('linktree');
});

Route::get('pert1', function () {
	return view('pertemuan1');
});

Route::get('pert2news', function () {
	return view('pertemuan2news');
});

Route::get('pert2newslagi', function () {
	return view('pertemuan2news1');
});

Route::get('pert3template', function () {
	return view('pertemuan3template');
});

Route::get('pert3danantara', function () {
	return view('pertemuan3danantara');
});

Route::get('pert4', function () {
	return view('pertemuan4');
});

Route::get('pert5lagi', function () {
	return view('pertemuan5part2');
});

Route::get('pert3tugas', function () {
	return view('pertemuan3tugas');
});

Route::get('bio', function () {
	return view('biodata');
});

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore',[PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate',[PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);
//crud tabel keranjangbelanja
Route::get('/keranjangbelanja', [keranjangController::class, 'index_keranjang']);
Route::get('/keranjangbeli/{id}', [keranjangController::class, 'beli']);
Route::post('/keranjangstore', [keranjangController::class, 'storeKeranjang']);
Route::get('/keranjangbatal/{id}', [keranjangController::class, 'batal']);


//buku tugas pra eas
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

//soal perempuan latihan eas
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/nilaikuliahtambah',[NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliahstore',[NilaiKuliahController::class, 'store']);


//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route mypegawai

Route::get('/eas', [mypegawaiController::class, 'mypegawai']);
Route::get('/mypegawaitambah',[mypegawaiController::class, 'tambahmypegawai']);
Route::post('/mypegawaistore',[mypegawaiController::class, 'storemypegawai']);
Route::get('/mypegawaiview/{id}',[mypegawaiController::class, 'viewmypegawai']);
