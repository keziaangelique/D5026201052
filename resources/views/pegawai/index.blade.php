@extends('layout.happy')
@section('title', 'Data Pegawai')

@section('konten')

    <div class="container my-5">
        <h3>Data Pegawai</h3>

        <div class="row ">
            <div class="col-12 d-flex justify-content-end">
                <a href="/pegawai/tambah" class="btn btn-md btn-primary mb-3"> + Tambah Data Pegawai</a>
            </div>
        </div>
    <table  class="table table-hover table-bordered align-middle text-center">
    <tr>
    <th width="25%">Nama Lengkap</th>
    <th width="20%">Jabatan</th>
    <th width="10%">Umur</th>
    <th width="25%">Alamat</th>
    <th width="20%" colspan="2">Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
    <td>{{ $p->pegawai_nama }}</td>
    <td>{{ $p->pegawai_jabatan }}</td>
    <td>{{ $p->pegawai_umur }}</td>
    <td>{{ $p->pegawai_alamat }}</td>

    <td><a class="btn btn-warning btn-md" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a></td>
    <td><a class="btn btn-danger btn-md" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a></td>

    </tr>
    @endforeach
    </table>

    </div>
@endsection
