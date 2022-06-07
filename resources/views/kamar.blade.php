@extends('dashboard.layout.main')

@section('container')
    <h1>Halaman Kamar</h1>

    <div>
        <a href="{{ url('/kamar/create') }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <form method="POST">
        <table class="table table-bordered">
            <tr>
                <th>Nama Kamar</th>
                <th>Nomor Kamar</th>
                <th>Aksi</th>
            </tr>
        @foreach($kamar as $kam)
		<tr>
        <td>{{ $kam->nama_kamar}}</td>
                  <td>{{ $kam->nomor_kamar}}</td>
			<td>
				<a href="/kamar/edit/{{ $kam->id }}">Edit</a>
				|
				<a href="/kamar/hapus/{{ $kam->id }}">Hapus</a>
			</td>
</td>
              </tr>
            @endforeach
        </table>
</form>
    </div>
@endsection