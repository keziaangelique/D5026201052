@extends('layout.happy')
@section('title', 'Edit Data Hewan')

@section('konten')

    <h3>Edit Data Hewan</h3>

    <a class="btn btn-md btn-dark mb-3 " href="/hewan"> Kembali</a>

    <br />

	@foreach($hewan as $h)
	<form action="/hewan/save" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodehewan" value="{{$h->kodehewan}}">

        <div class="form-group">
            <label for="namahewan">Nama Hewan :</label>
            <input type="text" class="form-control" name="namahewan" value="{{$h->namahewan}}">
        </div><br/>

        <div class="form-group">
            <label for="jumlahhewan">Jumlah Hewan :</label>
            <input type="number" class="form-control" name="jumlahhewan" value="{{$h->jumlahhewan}}">
        </div><br/>

        <div class="form-group mb-2">
            <label for="tanggal">Tersedia :</label><br/>
            <input type="radio" id="y" name="tersedia" value="Y" @if($h->tersedia==='Y') checked="checked" @endif>
            <label for="h">Ya</label><br>
            <input type="radio" id="t" name="tersedia" value="T" @if($h->tersedia==='T') checked="checked" @endif>
            <label for="a">Tidak</label><br>
        </div><br/>

		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
