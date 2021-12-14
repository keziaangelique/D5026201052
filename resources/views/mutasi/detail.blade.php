@extends('layout.happy')
@section('title', 'Detail Data Mutasi')

@section('konten')

	<h3>Detail Mutasi</h3>

	<a class="btn btn-dark" href="/mutasi"> Kembali</a>

	<br/>

	@foreach($mutasi as $m)
        <div class="form-group">
            <label for="id"></label>
            <input type="hidden" class="form-control" name="id" value="{{ $m->id }}">
        </div><br/>
        <div class="form-group">
            <label for="idpegawai">ID Pegawai :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $m->idpegawai }}</label>
        </div><br/>
        <div class="form-group">
            <label for="departemen">Departemen :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $m->departemen }}</label>
        </div><br/>
        <div class="form-group">
            <label for="subdepartemen">Sub Departemen :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $m->subdepartemen }}</label>
        </div><br/>
        <div class="form-group">
            <label for="mulaibertugas">Mulai Bertugas :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $m->mulaibertugas }}</label>
        </div><br/>

	@endforeach


@endsection
