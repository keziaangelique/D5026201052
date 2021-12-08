@extends('layout.happy')
@section('title', ' Edit Data Pegawai')

@section('konten')

	<h3>Edit Pegawai</h3>

	<a class="btn btn-dark" href="/pegawai"> Kembali</a>

	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="id"></label>
            <input type="hidden" class="form-control" name="id" value="{{ $p->pegawai_id }}">
        </div><br/>
        <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" class="form-control" name="nama" value="{{ $p->pegawai_nama }}">
        </div><br/>
        <div class="form-group">
            <label for="jabatan">Jabatan :</label>
            <input type="text" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div><br/>
        <div class="form-group">
            <label for="umur">Umur :</label>
            <input type="number" class="form-control" name="umur" value="{{ $p->pegawai_umur }}">
        </div><br/>
        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <textarea class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea>
        </div><br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach


@endsection
