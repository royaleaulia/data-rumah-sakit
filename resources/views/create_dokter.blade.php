@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Tambah Data Kamar</h1>

<a href="{{ '/dokter' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
   <form action={{ ("/dokter/store") }} method="post">
    @csrf
        <div class="form-group">
            <input type="text" id="nama_kamar" name="nama_kamar" class="form-control" placeholder="Nama Kamar">
        </div>
        <div class="form-group">
            <input type="text" id="nomor_kamar" name="nomor_kamar" class="form-control" placeholder="Nomor Kamar">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
        </div>

   </form>
</div>
</div>

@endsection