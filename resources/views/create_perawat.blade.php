@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Tambah Perawat</h1>

<a href="{{ '/kamar' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
   <form action="{{ route('simpanperawat') }}" method="post">
    @csrf
        <div class="form-group">
            <input type="text" id="nama_perawat" name="nama_perawat" class="form-control" placeholder="Nama Perawat">
        </div>
        <div class="form-group">
            <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
        </div>

   </form>
</div>
</div>

@endsection