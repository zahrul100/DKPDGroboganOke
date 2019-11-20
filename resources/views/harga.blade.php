<!DOCTYPE html>
<html>
<head>
	<title>Update Harga Pangan </title>
</head>

<style>
  #myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
  display : none;
}

 #dua{
  display : none;
}


div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>

<body>
	<h3>Data Harga Pangan</h3>
	<button onclick="myFunction()">Tambah</button>
	<div id="myDIV">
	<form action="/harga/store" method="post">
		{{ csrf_field() }}
		Nama_pangan <input type="text" name="nama_pangan" required="required"> <br/>
		harga <input type="number" name="harga" required="required"> <br/>
		satuan <input type="text" name="satuan" required="required"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	</div>


<div>
  
</div>
	<br/>
	<br/>
	<div>
	<table border="1">
		<tr>
			<th>Nama Pangan</th>
			<th>Harga Pasar</th>
			<th>Satuan</th>
			<th><th>
		</tr>
		@foreach($harga as $p)
		<tr>
			<td>{{ $p->nama_pangan }}</td>
			<td>{{ $p->harga }}</td>
			<td>{{ $p->satuan }}</td>
			
		
<div id="dua">
		<form action="/harga/updates" method="post" >
			{{ csrf_field() }}
			 <td><input type="text" id="fname" name="nama_pangan" placeholder="Nama Pangan"></td><input type="hidden" id="fname" name="id" placeholder="Nama Pangan" value="{{$p->id_harga}}">
			 <td><input type="text" id="fname" name="harga" placeholder="Harga"> </td>
			 <td><input type="text" id="fname" name="satuan" placeholder="Satuan"> </td>
			 <td>	<input type="submit" value="Simpan Data">
			</td>

		</form>

		<td><a href="/harga/hapus/{{$p->id_harga}}"><input action="" type="submit" value="hapus"></a></td
></div>
</tr>
@endforeach

	</table>
</div>


 <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function myFunction2() {
  var x = document.getElementById("dua");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>
</body>
</html>