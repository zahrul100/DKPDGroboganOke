<!DOCTYPE html>
<html>
<head>
	<title>ini berita</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style> 
 h5{
 white-space: pre-wrap;
 }
 table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
 </style>
</head>
<a href="javascript:history.back()"><button class="btn btn-primary">Back</button></a>
<body>
	<div class="row">
		<div class="container">
			<div class="col-lg-8 mx-auto my-5">	
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 				
				@foreach($berita as $g)
					
					{{$g->created_at}}
                        <h1>{{$g->Judul}}</h1><br>
						@if($g->file != 0)
							<img src="{{ url('/data_file/'.$g->file) }}"><br>\n
						@endif
							<h5>{!! $g->berita !!}</h5>
						
					<form action="/komentar/store" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

 					<input type="hidden" name="id" value="{{$g->id}}">
					<input type="text" name="isi_komentar">
					<input class ="btn btn-primary" type="submit" value="Komen">
				</form>
				@endforeach
 				
				 @foreach($komentar as $k)
				 <table style="width:100%">
				 <tr>
				 	<th>
					 	{{$k->tgl_komentar}}
						 <br>
				 		{{$k->isi_komentar}}
						 <br>
						 <a class="btn btn-danger" href="/komentar/hapus/{{ $k->id_komentar}}">HAPUS</a>
 					</th>
				 </tr>
				 </table>
				 @endforeach			
</body>
</html>