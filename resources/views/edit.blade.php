<html>
<head>
	<title>edit</title>
</head>


<body>
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
	<a href="/harga"> Kembali</a>
	<br/>
	<br/>
 
	@foreach($harga as $p)
	<form action="/harga/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_harga}}"> <br/>
		Nama Pangan <input type="text" required="required" name="nama_pangan" value="{{ $p->nama_pangan}}"> <br/>
		Harga <input type="number" required="required" name="harga" value="{{ $p->harga }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

	
</body>




</html>