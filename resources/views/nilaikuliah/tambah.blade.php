@extends('layout.happy')
@section('title', 'Tambah Data Nilai')

@section('konten')

	<h3>Tambah Data Nilai</h3>

	<a class="btn btn-md btn-dark mb-3" href="/nilaikuliah"> Kembali</a>

	<br/>

	<form action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="NRP">NRP :</label>
            <input type="number" class="form-control" placeholder="Masukkan NRP..." name="NRP" required="required">
        </div><br/>
        <div class="form-group">
            <label for="NilaiAngka">Nilai Angka :</label>
            <input type="number" class="form-control" placeholder="Masukkan Nilai Angka..." name="NilaiAngka" required="required">
        </div><br/>
        <div class="form-group">
            <label for="SKS">SKS :</label>
            <input type="number" class="form-control" placeholder="Masukkan SKS..." name="SKS" required="required">
        </div><br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>

@endsection
