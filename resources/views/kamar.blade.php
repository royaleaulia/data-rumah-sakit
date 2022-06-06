@extends('layouts.main')

@section('container')
    <h1>Halaman Kamar</h1>
    <div>
        <a href="{{ '/create_kamar' }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>Nama Kamar</th>
                <th>Nomor Kamar</th>
            </tr>
            @foreach ($kamar as $kam)
              <tr>  
                  <td>{{ $kam->nama_kamar}}</td>
                  <td>{{ $kam->nomor_kamar }}</td>
              </tr>
            @endforeach
        </table>
    </div>
@endsection