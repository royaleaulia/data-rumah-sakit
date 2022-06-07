@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Petugas Administrasi</h1>

    <div>
        <a href="{{ url('/petugas_administrasi/create') }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <form method="POST">
        <table class="table table-bordered">
            <tr>
                <th>Nama Petugas</th>
                <th>Alamat</th>
                <th>Jenis Kelamin Dokter</th>
                <th>Aksi</th>
            </tr>
        @foreach($petugas_administrasi as $gas)
		<tr>
        <td>{{ $gas->nama_petugas }}</td>
                  <td>{{ $gas->alamat_petugas}}</td>
                  <td>{{ $gas->jenis_kelamin_petugas}}</td>
			<td>
				<a href="/petugas_administrasi/edit/{{ $gas->id }}">Edit</a>
				|
				<a href="/petugas_administrasi/hapus/{{ $gas->id }}">Hapus</a>
			</td>
</td>
              </tr>
            @endforeach
        </table>
</form>
    </div>
@endsection