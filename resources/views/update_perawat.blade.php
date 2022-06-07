@extends('layouts.main')

@section('container')
    <h1>Halaman Edit Data Perawat</h1>

<a href="{{ '/perawat' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
@foreach($perawat as $pwr)
	<form action={{ "/perawat/update" }} method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $pwr->id }}"> <br/>
		Nama Obat <input type="text" required="required" name="nama_perawat" value="{{ $pwr->nama_perawat }}"> <br/>
		Jenis Obat <input type="text" required="required" name="jenis_kelamin" value="{{ $pwr->jenis_kelamin }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
</div>

@endsection