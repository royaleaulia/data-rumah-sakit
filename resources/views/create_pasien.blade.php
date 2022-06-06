@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Tambah Data Pasien</h1>

<a href="{{ '/pasien' }}" class="btn btn-success">Kembali<i class="fas-plus-square"></a>
<div class="card card-info card-outline">
<div class="card-body">
   <form action="{{ route('simpanpasien') }}" method="post">
    @csrf
        <div class="form-group">
            <input type="text" id="nama_pasien" name="nama_pasien" class="form-control" placeholder="Nama Pasien">
        </div>
        <div class="form-group">
            <input type="date" id="tanggal_lahir_pasien" name="tanggal_lahir_pasien" class="form-control" placeholder="Tanggal Lahir Pasien">
        </div>
        <div class="form-group">
            <textarea id="alamat_pasien" name="alamat_pasien" class="form-control" placeholder="Alamat Pasien"></textarea>
        </div>
        <div class="form-group">
            <input type="text" id="jenis_kelamin_pasien" name="jenis_kelamin_pasien" class="form-control" placeholder="Jenis Kelamin">
        </div>
        <div class="form-group">
            <input type="text" id="no_telp_pasien" name="no_telp_pasien" class="form-control" placeholder="No Telp Pasien">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
        </div>

   </form>
</div>
</div>

@endsection