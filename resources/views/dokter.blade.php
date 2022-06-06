@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Dokter</h1>

    <div>
        <a href="{{ 'dokter/create_dokter' }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>Nama Dokter</th>
                <th>Jenis Kelamin Dokter</th>
                <th>Spesialis</th>
            </tr>
            @foreach ($dokter as $dok)
              <tr>  
                  <td>{{ $dok->nama_dokter}}</td>
                  <td>{{ $dok->jenis_kelamin_dokter}}</td>
                  <td>{{ $dok->spesialis}}</td>
              </tr>
            @endforeach
        </table>
    </div>
@endsection