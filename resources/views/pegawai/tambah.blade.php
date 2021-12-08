@extends('layout.happy')
@section('title', 'Tambah Data Pegawai')

@section('konten')

	<h3>Tambah Data Pegawai</h3>

	<a class="btn btn-md btn-dark mb-3" href="/pegawai"> Kembali</a>

	<br/>

	<form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" class="form-control" placeholder="Masukkan nama pegawai" name="nama" required="required">
        </div><br/>
        <div class="form-group">
            <label for="jabatan">Jabatan :</label>
            <input type="text" class="form-control" placeholder="Masukkan jabatan pegawai" name="jabatan" required="required">
        </div><br/>
		<div class="form-group">
            <label for="umur">Umur :</label>
            <input type="number" class="form-control" placeholder="Masukkan umur pegawai" name="umur" required="required">
        </div><br/>
        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <textarea type="text" class="form-control" placeholder="Masukkan alamat pegawai" name="alamat" required="required"> </textarea>
        </div><br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>

@endsection
