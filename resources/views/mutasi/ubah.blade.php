<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>CRUD Mutasi</title>
</head>
<body>
<div class="container">
	<h3>Edit Mutasi</h3>

	<a class="btn btn-dark" href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/unggah" method="post">
		{{ csrf_field() }}
		ID <input type="hidden" name="id" value="{{ $m->id }}"> <br/> <br/>
		ID Pegawai <input type="number" name="idpegawai" required="required" value="{{ $m->idpegawai }}"> <br/> <br/>
		Departemen <input type="text" name="departemen" required="required"  value="{{ $m->departemen }}"> <br/> <br/>
        Sub Departemen <input type="text" name="subdepartemen" required="required" value="{{ $m->subdepartemen }}"> <br/> <br/>
        Mulai Bertugas <input type="datetime-local" name="mulaibertugas" required="required" value="{{ $m->mulaibertugas }}"> <br/>
		<br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>

</body>
</html>
