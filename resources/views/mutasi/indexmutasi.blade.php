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
	<h3>Tabel Mutasi</h3>

	<a class="btn btn-warning" href="/mutasi/add"> + Tambah Data Mutasi</a>

	<br/>
	<br/>

	<table class="table">
		<tr>
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
            <th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td>{{ $m->id }}</td>
			<td>{{ $m->idpegawai }}</td>
			<td>{{ $m->departemen }}</td>
			<td>{{ $m->subdepartemen }}</td>
            <td>{{ $m->mulaibertugas }}</td>
			<td>
				<a class="btn btn-primary" href="/mutasi/ubah/{{ $m->id }}">Edit</a>

				<a class="btn btn-danger" href="/mutasi/clear/{{ $m->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</div>

</body>
</html>
