@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Dokter</h1>

    <div>
        <a href="{{ url('/dokter/create') }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <form method="POSY">
        <table class="table table-bordered">
            <tr>
                <th>Nama Dokter</th>
                <th>Jenis Kelamin Dokter</th>
                <th>Spesialis</th>
                <th>Aksi</th>
            </tr>
        @foreach($dokter as $dok)
		<tr>
        <td>{{ $dok->nama_dokter}}</td>
                  <td>{{ $dok->jenis_kelamin_dokter}}</td>
                  <td>{{ $dok->spesialis}}</td>
			<td>
				<a href="/dokter/edit/{{ $dok->id_dokter }}">Edit</a>
				|
				<a href="/dokter/hapus/{{ $dok->id_dokter }}">Hapus</a>
			</td>
</td>
              </tr>
            @endforeach
        </table>
</form>
    </div>
@endsection