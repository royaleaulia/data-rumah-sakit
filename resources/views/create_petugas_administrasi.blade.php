@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Tambah Petugas Administrasi</h1>

<a href="{{ '/kamar' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
   <form action="{{ route('simpanpetugas') }}" method="post">
    @csrf
        <div class="form-group">
            <input type="text" id="nama_petugas" name="nama_petugas" class="form-control" placeholder="Nama Petugas">
        </div>
        <div class="form-group">
            <input type="text" id="alamat_petugas" name="alamat_petugas" class="form-control" placeholder="Alamat Petugas">
        </div>
        <div class="form-group">
            <input type="text" id="jenis_kelamin_petugas" name="jenis_kelamin_petugas" class="form-control" placeholder="Jenis Kelamin">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
        </div>

   </form>
</div>
</div>

@endsection