@extends('layouts.main')

@section('container')
    <h1>Halaman Petugas Administrasi</h1>
    <div>
        <a href="{{ '/create_dokter' }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>Nama Petugas </th>
                <th>Alamat Petugas</th>
                <th>Jenis Kelamin Petugas</th>
            </tr>
            @foreach ($petugas_administrasi as $pet)
            <tr>  
                <td>{{ $pet->nama_petugas}}</td>
                <td>{{ $pet->alamat_petugas }}</td>
                <td>{{ $pet->jenis_kelamin_petugas}}</td>
            </tr>
          @endforeach
        </table>
    </div>
@endsection