@extends('template')

@section('konten')

	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliahtambah" class="btn btn-primary"> + Tambah Data Baru</a>

	<br/>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>

		@foreach($nilaikuliah as $n)

		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>

			<td>
				@if($n->NilaiAngka <= 40)
					D
				@elseif($n->NilaiAngka <= 60)
					C
				@elseif($n->NilaiAngka <= 80)
					B
				@else
					A
				@endif
			</td>

			<td>{{ $n->NilaiAngka * $n->SKS }}</td>

		</tr>

		@endforeach

	</table>

@endsection
