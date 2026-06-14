@extends('template')
@section('title', 'Tambah Buku')
@section('konten')

    <h2>Tambah Data Buku</h2>

    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        <p>
            <label>Merk Buku</label><br>
            <input type="text" name="merkbuku" maxlength="30" required>
        </p>
        <p>
            <label>Stock Buku</label><br>
            <input type="number" name="stockbuku" min="0" required>
        </p>
        <p>
            <label>Tersedia (Y/T)</label><br>
            <input type="text" name="tersedia" maxlength="1" placeholder="Y atau T" required style="text-transform: uppercase;">
        </p>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
