<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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
