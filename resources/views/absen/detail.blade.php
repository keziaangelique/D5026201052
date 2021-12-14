@extends('layout.happy')
@section('title', 'Detail Data Absen')

@section('konten')

	<h3>Detail Data Absen</h3>

	<a class="btn btn-dark" href="/absen"> Kembali</a>

	<br/>

	@foreach($absen as $a)
        <div class="form-group">
            <label for="id"></label>
            <input type="hidden" class="form-control" name="id" value="{{ $a->ID }}">
        </div><br/>
        <div class="form-group">
            <label for="idpegawai">ID Pegawai :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $a->IDPegawai }}</label>
        </div><br/>
        <div class="form-group">
            <label for="tanggal">Tanggal :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $a->Tanggal }}</label>
        </div><br/>
        <div class="form-group">
            <label for="status">Status :</label>
            <label class="col-md-2 col-sm-4 control-label" >{{ $a->Status }}</label>
        </div><br/>

	@endforeach


@endsection
