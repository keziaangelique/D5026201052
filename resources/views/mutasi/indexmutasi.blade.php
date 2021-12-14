@extends('layout.happy')
@section('title', 'Data Mutasi')

@section('konten')

<div class="container my-5">
    <h3>Data Mutasi</h3>

    <div class="row ">
        <div class="col-12 d-flex justify-content-end">
            <a href="/mutasi/add" class="btn btn-md btn-primary mb-3"> + Tambah Data Mutasi</a>
        </div>
    </div>

    <div class="container" align='center'>
        <p>Cari Data Mutasi :</p>
        <form action="/mutasi/cari" method="GET">
            <input class="form-control mb-2" type="text" name="cari" placeholder="Cari Mutasi..." value="{{ old('cari') }}">
            <input class="form-control btn btn-success btn-md mb-3" type="submit" value="Cari Data">
        </form>
    </div>

<table  class="table table-hover table-bordered align-middle table-sm text-center">
<tr>
    <th width="5%">No</th>
    <th width="15%">Nama Pegawai</th>
    <th width="15%">Departemen</th>
    <th width="15%">Sub Departemen</th>
    <th width="20%">Mulai Bertugas</th>
    <th width="30%" colspan="3">Opsi</th>
</tr>
@foreach($mutasi as $m)
<tr>
    <td>{{ $loop->iteration }}</td>
    {{-- <td>{{ $m->id }}</td> --}}
    {{-- <td>{{ $m->idpegawai }}</td> --}}
    <td>{{ $m->pegawai_nama}}</td>
    <td>{{ $m->departemen }}</td>
    <td>{{ $m->subdepartemen }}</td>
    <td>{{ $m->mulaibertugas }}</td>
    <td>
        <a class="btn btn-info btn-md" href="/mutasi/detail/{{ $m->id }}">Detail</a>
    </td>
<td><a class="btn btn-warning btn-md" href="/mutasi/ubah/{{ $m->id }}">Edit</a></td>
<td><a class="btn btn-danger btn-md" href="/pegawai/clear/{{ $m->id }}">Hapus</a></td>

</tr>
@endforeach
</table>
{{$mutasi->links()}}
</div>
@endsection
