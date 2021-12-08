@extends('layout.happy')
@section('title', 'Tambah Data Mutasi')

@section('konten')

<div class="container">
	<h3>Tambah Data Mutasi</h3>

	<a class="btn btn-md btn-dark mb-3" href="/mutasi"> Kembali</a>

	<br/>

	<form action="/mutasi/save" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="id">ID :</label>
            <input type="number" class="form-control" placeholder="Masukkan ID" name="id" required="required">
        </div><br/>
        <div class="form-group">
            <label for="idpegawai">ID Pegawai :</label>
            <input type="number" class="form-control" placeholder="Masukkan ID Pegawai" name="idpegawai" required="required">
        </div><br/>
        <div class="form-group">
            <label for="departemen">Departemen :</label>
            <input type="text" class="form-control" placeholder="Masukkan Departemen" name="departemen" required="required">
        </div><br/>
        <div class="form-group">
            <label for="subdepartemen">Sub Departemen :</label>
            <input type="text" class="form-control" placeholder="Masukkan Sub Departemen" name="subdepartemen" required="required">
        </div><br/>
        <div class="form-group">
            <label for="mulaibertugas">Mulai Bertugas :</label>
            <input type="datetime-local" class="form-control" name="mulaibertugas" required="required">
        </div><br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
</div>
</body>

@endsection
