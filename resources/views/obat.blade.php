@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Obat</h1>

    <div>
        <a href="{{ url('/obat/create') }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <form method="POST">
        <table class="table table-bordered">
            <tr>
                <th>Nama Obat</th>
                <th>Jenis Obat</th>
                <th>Fungsi Obat</th>
                <th>Aksi</th>
            </tr>
        @foreach($obat as $obt)
		<tr>
        <td>{{ $obt->nama_obat}}</td>
                  <td>{{ $obt->jenis_obat}}</td>
                  <td>{{ $obt->fungsi_obat}}</td>
			<td>
				<a href="/obat/edit/{{ $obt->id_obat }}">Edit</a>
				|
				<a href="/obat/hapus/{{ $obt->id_obat }}">Hapus</a>
			</td>
</td>
              </tr>
            @endforeach
        </table>
</form>
    </div>
@endsection