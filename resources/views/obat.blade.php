@extends('layouts.main')

@section('container')
    <h1>Halaman Obat</h1>
    <div>
        <a href="{{ '/create_obat' }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>Nama Obat</th>
                <th>Jenis Obat</th>
                <th>Fungsi Obat</th>
            </tr>
            @foreach ($obat as $ob)
              <tr>  
                  <td>{{ $ob->nama_obat}}</td>
                  <td>{{ $ob->jenis_obat }}</td>
                  <td>{{ $ob->fungsi_obat}}</td>
              </tr>
            @endforeach
        </table>
    </div>
@endsection