@extends('template')
@section('title', 'Edit Buku')
@section('konten')

    <h2>Edit Data Buku</h2>

    <form action="{{ route('buku.update', $buku->kodebuku) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Merk Buku</label><br>
            <input type="text" name="merkbuku" maxlength="30" value="{{ $buku->merkbuku }}" required>
        </p>
        <p>
            <label>Stock Buku</label><br>
            <input type="number" name="stockbuku" min="0" value="{{ $buku->stockbuku }}" required>
        </p>
        <p>
            <label>Tersedia (Y/T)</label><br>
            <input type="text" name="tersedia" maxlength="1" placeholder="Y atau T" value="{{ $buku->tersedia }}" required style="text-transform: uppercase;">
        </p>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
