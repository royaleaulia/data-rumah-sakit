@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Tambah Data Obat</h1>

<a href="{{ '/obat' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
   <form action={{ ("/obat/store") }} method="post">
    @csrf
        <div class="form-group">
            <input type="text" id="nama_obat" name="nama_obat" class="form-control" placeholder="Nama Obat">
        </div>
        <div class="form-group">
            <input type="text" id="jenis_obat" name="jenis_obat" class="form-control" placeholder="Jenis Obat">
        </div>
        <div class="form-group">
            <input type="text" id="fungsi_obat" name="fungsi_obat" class="form-control" placeholder="Fungsi Obat">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
        </div>

   </form>
</div>
</div>

@endsection