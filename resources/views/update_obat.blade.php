@extends('layouts.main')

@section('container')
    <h1>Halaman Edit Data Obat</h1>

<a href="{{ '/obat' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
@foreach($obat as $obt)
	<form action={{ "/obat/update" }} method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_obat" value="{{ $obt->id_obat }}"> <br/>
		Nama Obat <input type="text" required="required" name="nama_obat" value="{{ $obt->nama_obat }}"> <br/>
		Jenis Obat <input type="text" required="required" name="jenis_obat" value="{{ $obt->jenis_obat }}"> <br/>
		Fungsi Obat <input type="text" required="required" name="fungsi_obat" value="{{ $obt->fungsi_obat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
</div>

@endsection