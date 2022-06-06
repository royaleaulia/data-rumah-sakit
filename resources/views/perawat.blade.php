@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Perawat</h1>

    <div>
        <a href="{{ url('/perawat/create') }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <form method="POST">
        <table class="table table-bordered">
            <tr>
                <th>Nama Perawat</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
            @foreach($perawat as $pwr)
		    <tr>
                <td>{{ $pwr->nama_perawat}}</td>
                <td>{{ $pwr->jenis_kelamin}}</td>
			<td>
				<a href="/perawat/edit/{{ $pwr->id }}">Edit</a>
				|
				<a href="/perawat/hapus/{{ $pwr->id }}">Hapus</a>
			</td>
            </tr>
            @endforeach
        </table>
</form>
    </div>
@endsection