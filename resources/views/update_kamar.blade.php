@extends('layouts.main')

@section('container')
    <h1>Halaman Edit Data Kamar</h1>

<a href="{{ '/kamar' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
@foreach($kamar as $kam)
	<form action={{ "/kamar/update" }} method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $kam->id }}"> <br/>
		Nama Kamar <input type="text" required="required" name="nama_kamar" value="{{ $kam->nama_kamar }}"> <br/>
		Nomor Kamar <input type="number" required="required" name="nomor_kamar" value="{{ $kam->nomor_kamar }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
</div>

@endsection