@extends('layout.happy')
@section('title', ' Edit Data Mutasi')

@section('konten')

<div class="container my-5">
	<h3>Edit Mutasi</h3>

	<a class="btn btn-dark" href="/mutasi"> Kembali</a>

	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/unggah" method="post">
		{{ csrf_field() }}
        <div class="form-group">
            <label for="id"></label>
            <input type="hidden" class="form-control" name="id" value="{{ $m->id }}">
        </div><br/>
        <div class="form-group">
            <label for="idpegawai">ID Pegawai :</label>
            <input type="number" class="form-control" name="idpegawai" value="{{ $m->idpegawai }}">
        </div><br/>
        <div class="form-group">
            <label for="departemen">Departemen :</label>
            <input type="text" class="form-control" name="departemen" value="{{ $m->departemen }}">
        </div><br/>
        <div class="form-group">
            <label for="subdepartemen">Sub Departemen :</label>
            <input type="text" class="form-control" name="subdepartemen" value="{{ $m->subdepartemen }}">
        </div><br/>
        <div class="form-group">
            <label for="mulaibertugas">Mulai Bertugas :</label>
            <input type="datetime-local" class="form-control" name="mulaibertugas" value="{{ $m->mulaibertugas }}">
        </div><br/>

		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>

@endsection
