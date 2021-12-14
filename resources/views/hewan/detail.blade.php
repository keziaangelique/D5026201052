@extends('layout.happy')
@section('title', 'Detail Data Hewan')

@section('konten')

	<h3>Detail Data Hewan</h3>

	<a class="btn btn-dark" href="/hewan"> Kembali</a>

	<br/>

	@foreach($hewan as $h)
        <div class="form-group">
            <label for="id"></label>
            <input type="hidden" class="form-control" name="id" value="{{ $h->kodehewan }}">
        </div><br/>
        <div class="form-group">
            <label for="namahewan">Nama Hewan :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $h->namahewan }}</label>
        </div><br/>
        <div class="form-group">
            <label for="jumlahhewan">Jumlah Hewan :</label>
            <label class="col-md-2 col-sm-4 control-label">{{ $h->jumlahhewan }}</label>
        </div><br/>
        <div class="form-group">
            <label for="tersedia">Tersedia :</label>
            <label class="col-md-2 col-sm-4 control-label" >{{ $h->tersedia }}</label>
        </div><br/>

	@endforeach


@endsection
