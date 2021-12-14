@extends('layout.happy')
@section('title', 'Detail Data Pegawai')

@section('konten')

	<h3>Detail Pegawai</h3>

	<a class="btn btn-dark" href="/pegawai"> Kembali</a>

	<br/>

	@foreach($pegawai as $p)
        <div class="form-group">
            <label for="id"></label>
            <input type="hidden" class="form-control" name="id" value="{{ $p->pegawai_id }}">
        </div><br/>
        <div class="form-group">
            <label for="nama">Nama :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_nama }}</label>
        </div><br/>
        <div class="form-group">
            <label for="jabatan">Jabatan :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_jabatan }}</label>
        </div><br/>
        <div class="form-group">
            <label for="umur">Umur :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_umur }}</label>
        </div><br/>
        <div class="form-group">
            <label for="alamat">Alamat :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $p->pegawai_alamat }}</label>
        </div><br/>


	@endforeach


@endsection
