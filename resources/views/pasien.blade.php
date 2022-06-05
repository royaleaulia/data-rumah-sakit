@extends('layouts.main')

@section('container')
    <h1>Halaman Pasien</h1>
    <div>
        <a href="{{ '/create_pasien' }}" class="btn btn-success">Tambah Data<i class="fas-plus-square"></a>
    </div>
    <div>
        <table class="table table-bordered table-responsive">
            <tr>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir Pasien</th>
                <th>Alamat Pasien</th>
                <th>Jenis Kelamin Pasien</th>
                <th>Nomor Telepon Pasien</th>

            </tr>
            
            @foreach ($pasien as $pas)
              <tr>  
                  <td>{{ $pas->nama_pasien}}</td>
                  <td>{{ $pas->tanggal_lahir_pasien }}</td>
                  <td>{{ $pas->alamat_pasien}}</td>
                  <td>{{ $pas->jenis_kelamin_pasien }}</td>
                  <td>{{ $pas->no_telp_pasien}}</td>
              </tr>
            @endforeach


                {{-- <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td> --}}
            
        </table>
    </div>
@endsection

