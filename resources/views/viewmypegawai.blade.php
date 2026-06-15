<!-- Menghubungkan dengan view template master -->
@extends('template')

@section('title', 'Kode Soal mypegawai')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>
        <div class="card">
        <div class="card-header">
            View Data Pegawai
        </div>

        @foreach($mypegawai as $p)

        <div class="card-body">
                <input type="hidden" name="id" value="{{ $p->kodepegawai }}">

                <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
            </tr>
                <tr>
                    <td>{{ $p->kodepegawai }}</td>
                    <td>{{ $p->namalengkap }}</td>
                    <td>{{ $p->divisi }}</td>
                    <td>{{ $p->departemen }}</td>
                </tr>
        </table>

        </div>
        @endforeach
        <a href="/eas">Kembali</a>
    </div>
    </center>
@endsection
