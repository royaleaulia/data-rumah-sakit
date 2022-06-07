@extends('layouts.main')

@section('container')
    <h1>Halaman Edit Data Dokter</h1>

<a href="{{ '/petugas_administrasi' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
@foreach($petugas_administrasi as $gas)
	<form action={{ "/petugas_administrasi/update" }} method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $gas->id }}"> <br/>
		Nama Petugas <input type="text" required="required" name="nama_petugas" value="{{ $gas->nama_petugas }}"> <br/>
		Alamat Petugas <input type="text" required="required" name="alamat_petugas" value="{{ $gas->alamat_petugas }}"> <br/>
		Jenis Kelamin Petugas  <input type="text" required="required" name=" jenis_kelamin_petugas " value="{{ $gas-> jenis_kelamin_petugas  }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
</div>

@endsection