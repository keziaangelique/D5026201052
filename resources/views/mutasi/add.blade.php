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
	<h3>Tambah Data Mutasi</h3>

	<a class="btn btn-dark" href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/save" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="id" required="required"> <br/><br/>
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/><br/>
		Departemen <input type="text" name="departemen" required="required"> <br/><br/>
        Sub Departemen <input type="text" name="subdepartemen" required="required"> <br/><br/>
        Mulai Bertugas <input type="datetime-local" name="mulaibertugas" required="required"> <br/>
		<br/>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
</div>
</body>
</html>
