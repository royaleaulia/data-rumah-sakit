@extends('layouts.main')

@section('container')
    <h1>Halaman Edit Data Obat</h1>

<a href="{{ '/obat' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
@foreach($obat as $bat)
	<form action={{ "/obat/update" }} method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id_obat" value="{{ $bat->id_obat }}"> <br/>
		Nama Obat <input type="text" required="required" name="nama_obat" value="{{ $bat->nama_obat }}"> <br/>
		Jenis Obat <input type="text" required="required" name="jenis_obat" value="{{ $bat->jenis_obat }}"> <br/>
		Fungsi Obat <input type="text" required="required" name="fungsi_obat" value="{{ $bat->fungsi_obat }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
</div>

@endsection