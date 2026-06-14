@extends('template')
@section('title', 'Data Buku')
@section('konten')

    <h2>Data Buku</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Buku</th>
            <th>Merk Buku</th>
            <th>Stock Buku</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($data as $row)
            <tr>
                <td>{{ $row->kodebuku }}</td>
                <td>{{ $row->merkbuku }}</td>
                <td>{{ $row->stockbuku }}</td>
                <td>{{ $row->tersedia }}</td>
                <td>
                    <a href="{{ route('buku.edit', $row->kodebuku) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('buku.destroy', $row->kodebuku) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data buku.</td>
            </tr>
        @endforelse
    </table>
@endsection
