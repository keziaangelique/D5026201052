@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')

    <div class="container my-5">
        <h3>Data Pegawai</h3>

        <div class="row ">
            <div class="col-12 d-flex justify-content-end">
                <a href="/pegawai/tambah" class="btn btn-md btn-primary mb-3"> + Tambah Data Pegawai</a>
            </div>
        </div><br/>

    <div class="container" align='center'>
    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control mb-2" type="text" name="cari" placeholder="Cari Pegawai..." value="{{ old('cari') }}">
		<input class="form-control btn btn-success btn-md mb-3" type="submit" value="Cari Data">
	</form>
    </div>
    <table  class="table table-hover table-bordered align-middle text-center">
    <tr>
    <th width="5%">No</th>
    <th width="25%">Nama Lengkap</th>
    {{-- <th width="20%">Jabatan</th>
    <th width="5%">Umur</th> --}}
    <th width="25%">Alamat</th>
    <th width="20%" colspan="3">Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $p->pegawai_nama }}</td>
    {{-- <td>{{ $p->pegawai_jabatan }}</td>
    <td>{{ $p->pegawai_umur }}</td> --}}
    <td>{{ $p->pegawai_alamat }}</td>

    <td><a class="btn btn-info btn-md" href="/pegawai/detail/{{ $p->pegawai_id }}">Detail</a></td>
    <td><a class="btn btn-warning btn-md" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a></td>
    <td><a class="btn btn-danger btn-md" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a></td>


    </tr>
    @endforeach
    </table>

    {{ $pegawai->links() }}

    </div>
@endsection
