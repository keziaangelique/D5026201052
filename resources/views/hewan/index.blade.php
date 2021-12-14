@extends('layout.happy')
@section('title', 'Data Hewan')

@section('konten')

<div class="container my-5">
    <h3>Data Hewan</h3>
    <div class="row ">
        <div class="col-12 d-flex justify-content-end">
            <a class="btn btn-md btn-primary mb-3" href="/hewan/tambah"> + Tambah Data Hewan</a>
        </div>
    </div>

    <div class="container" align='center'>
        <p>Cari Data Hewan :</p>
        <form action="/hewan/cari" method="GET">
            <input class="form-control mb-2" type="text" name="cari" placeholder="Cari Hewan..." value="{{ old('cari') }}">
            <input class="form-control btn btn-success btn-md mb-3" type="submit" value="Cari Data">
        </form>
    </div>

    <table class="table table-hover table-bordered align-middle text-center">
        <tr>
            <th width="15%">Kode Hewan</th>
            <th width="25%">Nama Hewan</th>
            <th width="20%">Jumlah Hewan</th>
            <th width="10%">Tersedia</th>
            <th width="30%" colspan="3">Opsi</th>
        </tr>
        @foreach($hewan as $h)
        <tr>
            <td>{{ $h->kodehewan }}</td>
            <td>{{ $h->namahewan }}</td>
            <td>{{ $h->jumlahhewan }}</td>
            <td>{{ $h->tersedia }}</td>
            <td>
                <a class="btn btn-info btn-md" href="/hewan/detail/{{ $h->kodehewan }}">Detail</a>
            </td>
            <td>
                <a class="btn btn-warning btn-md" href="/hewan/edit/{{$h->kodehewan}}">Edit</a>
            </td>
            <td>
                <a class="btn btn-danger btn-md" href="/hewan/delete/{{ $h->kodehewan}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$hewan->links()}}
</div>
@endsection
