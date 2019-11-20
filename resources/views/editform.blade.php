<html>
<head>
	<title>edit</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
<style>
textarea{
    white-space : pre-wrap;
}
</style>
<body>
	<h3>Edit Pegawai</h3>
	<a href="/upload"> Kembali</a>
	<br/>
	<br/>
 
	@foreach($edit as $p)
	<form action="/upload/edit/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" required="required" name="id" value="{{ $p->id}}"></input> <br/>
        Judul <input type="text" required="required" name="Judul" value="{{ $p->Judul}}"> <br/>
        
		<img src="{{ url('/data_file/'.$p->file) }}">
        <textarea class="ckeditor" id="ckedtor" rows="50" cols="100" class="span12" name="berita" required>
        {{$p->berita}}</textarea>  


		<input type="submit" value="Simpan Data">
		
	<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
	</form>
	@endforeach
</body>




</html>