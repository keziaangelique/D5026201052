@extends('layout.happy')
@section('title', 'Data Absen')

@section('konten')

<div class="container my-5">
    <h3>Data Absen</h3>
    <div class="row ">
        <div class="col-12 d-flex justify-content-end">
            <a class="btn btn-md btn-primary mb-3" href="/absen/tambah"> + Tambah Data Absen</a>
        </div>
    </div>

    <table class="table table-hover table-bordered align-middle text-center">
        <tr>
            <th width="10%">ID Pegawai</th>
            <th width="45%">Tanggal</th>
            <th width="15%">Status</th>
            <th width="30%" colspan="2">Opsi</th>
        </tr>
        @foreach($absen as $a)
        <tr>
            <td>{{ $a->IDPegawai }}</td>
            <td>{{ $a->Tanggal }}</td>
            <td>{{ $a->Status }}</td>
            <td>
                <a class="btn btn-warning btn-md" href="/absen/edit/{{ $a->ID}}">Edit</a>
            </td>
            <td>
                <a class="btn btn-danger btn-md" href="/absen/hapus/{{ $a->ID}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

</div>
@endsection
