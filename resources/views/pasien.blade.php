@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Pasien</h1>

    <div>
        <a href="{{ url('/pasien/create') }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <form method="POST">
        <table class="table table-bordered">
            <tr>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir Pasien</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No Telpon</th>
            </tr>
        @foreach($pasien as $pas)
		<tr>
        <td>{{ $pas->nama_pasien}}</td>
        <td>{{ $pas->alamat_pasien}}</td>
        <td>{{ $pas->jenis_kelamin_pasien}}</td>
		<td>{{ $pas->no_telp_pasien}}</td>
		<td>
				<a href="/pasien/edit/{{ $pas->id_pasien }}">Edit</a>
				|
				<a href="/pasien/hapus/{{ $pas->id_pasien }}">Hapus</a>
			</td>
</td>
              </tr>
            @endforeach
        </table>
</form>
    </div>
@endsection