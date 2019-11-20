<html>
<head>
	<title>Tambah </title>
</head>
<body>
 
	<h3>Data Pegawai</h3>
 
	<a href="/harga"> Kembali</a>
	<br/>
	<br/>
	<form action="/harga/store" method="post">
		{{ csrf_field() }}
		Nama_pangan <input type="text" name="nama_pangan" required="required"> <br/>
		harga <input type="number" name="harga" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>