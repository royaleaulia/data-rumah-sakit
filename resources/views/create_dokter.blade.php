@extends('layouts.main')

@section('container')
    <h1>Halaman Tambah Data Dokter</h1>

<a href="{{ '/dokter' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
   <form action="{{ route('simpandokter') }}" method="post">
    @csrf
        <div class="form-group">
            <input type="text" id="nomor_identitas_dokter" name="nomor_identitas_dokter" class="form-control" placeholder="Nomor Identitas Dokter">
        </div>
        <div class="form-group">
            <input type="text" id="nama_dokter" name="nama_dokter" class="form-control" placeholder="Nama Dokter">
        </div>
        <div class="form-group">
            <input type="text" id="jenis_kelamin" name="jenis_kelamin_dokter" class="form-control" placeholder="Jenis Kelamin">
        </div>
        <div class="form-group">
            <input type="text" id="spesialis" name="spesialis" class="form-control" placeholder="Spesialis">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
        </div>

   </form>
</div>
</div>

@endsection