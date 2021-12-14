@extends('layout.happy')
@section('title', 'Tambah Data Hewan')

@section('konten')

	<h3>Tambah Data Hewan</h3>

	<a class="btn btn-md btn-dark mb-3" href="/hewan"> Kembali</a>

	<br/>

	<form action="/hewan/store" method="post">
        {{ csrf_field() }}
        {{-- <div class="form-group">
            <label for="kodehewan">Kode Hewan :</label>
            <input type="number" class="form-control" placeholder="Masukkan kode hewan" name="kodehewan" required="required">
        </div><br/> --}}
        <div class="form-group">
            <label for="namahewan">Nama Hewan :</label>
            <input type="text" class="form-control" placeholder="Masukkan nama hewan" name="namahewan" required="required">
        </div><br/>
		<div class="form-group">
            <label for="jumlahhewan">Jumlah Hewan :</label>
            <input type="number" class="form-control" placeholder="Masukkan jumlah hewan" name="jumlahhewan" required="required">
        </div><br/>
        <div class="form-group">
            <label for="tanggal">Tersedia :</label><br/>
            <input type="radio" id="y" name="tersedia" value="Y">
            <label for="h">Ya</label><br>
            <input type="radio" id="t" name="tersedia" value="T" checked="checked">
            <label for="a">Tidak</label><br>
        </div><br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>

@endsection
