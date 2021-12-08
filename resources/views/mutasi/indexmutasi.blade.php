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
<table  class="table table-hover table-bordered align-middle table-sm text-center">
<tr>
    <th width="10%">ID</th>
    <th width="15%">ID Pegawai</th>
    <th width="16%">Departemen</th>
    <th width="16%">Sub Departemen</th>
    <th width="25%">Mulai Bertugas</th>
    <th width="18%" colspan="2">Opsi</th>
</tr>
@foreach($mutasi as $m)
<tr>
    <td>{{ $m->id }}</td>
    <td>{{ $m->idpegawai }}</td>
    <td>{{ $m->departemen }}</td>
    <td>{{ $m->subdepartemen }}</td>
    <td>{{ $m->mulaibertugas }}</td>
<td><a class="btn btn-warning btn-md" href="/mutasi/ubah/{{ $m->id }}">Edit</a></td>
<td><a class="btn btn-danger btn-md" href="/pegawai/clear/{{ $m->id }}">Hapus</a></td>

</tr>
@endforeach
</table>

</div>
@endsection
