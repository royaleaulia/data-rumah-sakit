@extends('layouts.main')

@section('container')
    <h1>Halaman Edit Data Dokter</h1>

<a href="{{ '/dokter' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
@foreach($dokter as $dok)
	<form action={{ "/dokter/update" }} method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_dokter" value="{{ $dok->id_dokter }}"> <br/>
		Nama Dokter <input type="text" required="required" name="nama_dokter" value="{{ $dok->nama_dokter }}"> <br/>
		Jenis Kelamin <input type="text" required="required" name="jenis_kelamin_dokter" value="{{ $dok->jenis_kelamin_dokter }}"> <br/>
		Spesialis  <input type="text" required="required" name="spesialis" value="{{ $dok-> spesialis  }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
</div>

@endsection