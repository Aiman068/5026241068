@extends('template')
@section('title', 'Kode SOal mypegawai')
@section('konten')

    <h2>Tambah Pegawai</h2>



    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="card-body">
<form action="/mypegawaistore" method="post">
{{ csrf_field() }}

<div class="form-group row">
            <label class="control-label col-sm-2" for="kodepegawai">
                Kode Pegawai
            </label>
            <div class="col-sm-6">
                <input class="form-control @error('kodepegawai') is-invalid @enderror"
                       type="text"
                       id="kodepegawai"
                       placeholder="Masukkan kode Pegawai HANYA BOLEH HURUF dan ANGKA"
                       name="kodepegawai" required="required" maxlength="9"
                       value="{{ old('kodepegawai') }}">
                @error('kodepegawai')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="namalengkap">
                Nama Lengkap
            </label>
            <div class="col-sm-6">
                <input class="form-control @error('namalengkap') is-invalid @enderror"
                       type="text"
                       id="namalengkap"
                       placeholder="HARUS DIISI dan HANYA BOLEH HURUF"
                       name="namalengkap" required="required" maxlength="50"
                       value="{{ old('namalengkap') }}">
                @error('namalengkap')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-sm-6">
                <input class="form-control @error('divisi') is-invalid @enderror"
                       type="text"
                       id="divisi"
                       placeholder="Masukkan Divisi (max 5 karakter)"
                       name="divisi" required="required" maxlength="55"
                       value="{{ old('divisi') }}">
                @error('divisi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-sm-6">
                <input class="form-control @error('departemen') is-invalid @enderror"
                       type="text"
                       id="departemen"
                       placeholder="Masukkan Departemen"
                       name="departemen" required="required"
                       value="{{ old('departemen') }}">
                @error('gaji')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="form-group row mt-4">
            <div class="col-sm-8 offset-sm-2">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
    </form>
</div>


@endsection
