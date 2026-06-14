@extends('template')

@section('title', 'Tambah Nilai')
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    <center>


        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Tambah Data Pegawai
            </div>

            <div class="form-group">
                <label>NRP</label>
                <input type="text" name="NRP" required="required" class="form-control">
            </div>

            <div class="form-group">
                <label>Nilai Angka</label>
                <input type="number" name="NilaiAngka" required="required" class="form-control">
            </div>

            <div class="form-group">
                <label>SKS</label>
                <input type="number" name="SKS" required="required" class="form-control">
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">

            </form>
        </div>
        </div>
        <br />
        <br />
        <a href="/nilaikuliah" class="btn btn-info"> Kembali</a>
    </center>
@endsection
