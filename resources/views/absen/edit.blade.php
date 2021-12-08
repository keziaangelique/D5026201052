@extends('layout.happy')
@section('title', 'Edit Data Absen')

@section('konten')

    <h3>Edit Data Absen</h3>

    <a class="btn btn-md btn-dark mb-3 " href="/absen"> Kembali</a>

    <br />

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $a->ID }}">

        <div class="form-group">
            <label for="nama">Nama :</label>
            <div class='col-sm-4 input-group date' id='nama'>
                <select class="form-control" name="idpegawai">
                    @foreach($pegawai as $p )
                        <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div><br/>

        <div class="form-group">
            <label for="tanggal">Tanggal :</label>
            <input type="datetime-local" class="form-control" name="tanggal" value="{{$a->Tanggal}}">
        </div><br/>

        <div class="form-group mb-2">
            <label for="tanggal">Status :</label><br/>
            <input type="radio" id="h" name="status" value="H" @if($a->Status==='H') checked="checked" @endif>
            <label for="h">HADIR</label><br>
            <input type="radio" id="a" name="status" value="A" @if($a->Status==='A') checked="checked" @endif>
            <label for="a">TIDAK HADIR</label><br>
        </div><br/>

		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
