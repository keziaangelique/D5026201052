@extends('layout.happy')
@section('title', 'Tambah Data Absen')

@section('konten')

    <h3>Tambah Data Absen</h3>

    <a class="btn btn-md btn-dark mb-2" href="/absen"> Kembali</a>

    <br />

    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="idpegawai">ID Pegawai :</label>
            <input type="text" class="form-control" name="idpegawai" pattern="[\d0-9]{0,}" maxlength="11" required="required">
        </div><br/>

        <div class="form-group">
            <label for="nama" >Nama Pegawai :</label>
            <div class='col-sm-4 input-group date' id='nama'>
                <select class="form-control" name="idpegawai">
                    @foreach($pegawai as $p )
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br/>

        <div class="form-group mb-2">
            <label for="tanggal">Tanggal :</label>
            <input type="datetime-local" class="form-control" name="tanggal">
        </div><br/>

        <div class="form-group mb-2">
            <label for="tanggal">Status :</label><br/>
            <input type="radio" id="h" name="status" value="H">
            <label for="h">HADIR</label><br>
            <input type="radio" id="a" name="status" value="A" checked="checked">
            <label for="a">TIDAK HADIR</label><br>
        </div><br/>

        <input class="btn btn-success" type="submit" value="Simpan Data">

    </form>

@endsection
