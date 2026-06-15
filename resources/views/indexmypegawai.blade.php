<!--Menghubungkan dengan view tempalte-->
@extends('template')

@section('title', 'Kode Soal mypegawai')
<!-- isi bagian konten-->
@section('konten')

    <center>
        <br />
        <br />

<a href="/mypegawaitambah" class="btn btn-primary">Tambah Pegawai Baru</a>


        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Opsi</th>
            </tr>
           @foreach ($mypegawai as $m)
                <tr>
                    <td>{{ $m->kodepegawai }}</td>
                    <td>{{ $m->namalengkap }}</td>
                    <td>{{ $m->divisi }}</td>
                    <td>{{ $m->departemen }}</td>

                    <td>

                        <a href="/mypegawaiview/{{ $m->kodepegawai }}" class="btn btn-danger">View</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </center>
@endsection
