@extends('layouts.main')

@section('container')
    <h1>Halaman Dokter</h1>

    <div>
        <a href="{{ '/create_dokter' }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Spesialis</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
@endsection