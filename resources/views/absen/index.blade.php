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
    <div class="container" align='center'>
        <p>Cari Data Absen :</p>
        <form action="/absen/cari" method="GET">
            <input class="form-control mb-2" type="text" name="cari" placeholder="Cari Absen..." value="{{ old('cari') }}">
            <input class="form-control btn btn-success btn-md mb-3" type="submit" value="Cari Data">
        </form>
    </div>
    <table class="table table-hover table-bordered align-middle text-center">
        <tr>
            <th width="5%">No</th>
            <th width="15%">Nama Pegawai</th>
            <th width="25%">Tanggal</th>
            <th width="15%">Status</th>
            <th width="30%" colspan="3">Opsi</th>
        </tr>
        @foreach($absen as $a)
        <tr>
            <td>{{ $loop->iteration }}</td>
            {{-- <td>{{ $a->IDPegawai }}</td> --}}
            <td>{{ $a->pegawai_nama}}</td>
            <td>{{ $a->Tanggal }}</td>
            <td>{{ $a->Status }}</td>
            <td>
                <a class="btn btn-info btn-md" href="/absen/detail/{{ $a->ID }}">Detail</a>
            </td>
            <td>
                <a class="btn btn-warning btn-md" href="/absen/edit/{{ $a->ID}}">Edit</a>
            </td>
            <td>
                <a class="btn btn-danger btn-md" href="/absen/hapus/{{ $a->ID}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$absen->links()}}
</div>
@endsection
