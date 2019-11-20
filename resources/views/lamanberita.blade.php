<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/templatekosong.css">
<link rel="stylesheet" href="css/kontenberita.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>
<body>

<div class="header">
    <div class="semua">
        <div class="isi">
                <img src="gambar/grob.png" height="45px" style="position: absolute"></div>
                
    <div class="isi">
        <div class="baru">
<a></a>
        <a href="">Tentang Kami<i class="fa fa-street-view"></i></a>
        <a href="https://www.facebook.com/search/top/?q=Purwodadi+Grobogan">Facebook</a>
        <a href="">Twitter</a>
        <a href="">Instagram</a>
    </div>
    </div>
</div>
</div>

<div id="navbartotal" style="z-index: 9999;">
<div id="navbar">
    <div class="bungkusnavbar">
  <a class="active inia" href="javascript:void(0)">DKPD GROBOGAN</a>
  

  <div class="dropdown " style="display: inline">
      <a class="inia" href="#"  data-toggle="dropdown" style="display: inline;">Profil</a>
      
      <div class="dropdown-menu asd" aria-labelledby="dropdownMenuLink" ">
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Profil Dinas </a><br>
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Struktur Organisasi </a><br>
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Renstra</a><br>
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Renja </a><br>
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Lakib </a><br>
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Daftar Pejabat </a><br>
         
         
      </div>
    </div>
    

<div class="dropdown">
  <a class="inia" href="javascript:void(0)"style="display: inline;">Data</a>

</div>

<div class="dropdown " style="display: inline">
    <a class="inia" href="#"  data-toggle="dropdown" style="display: inline;">Info</a>
    
    <div class="dropdown-menu asd" aria-labelledby="dropdownMenuLink" ">
        <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Berita </a><br>
        <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Artikel </a><br>
        <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Laporan Keuangan</a><br>
        <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Inventari Barang </a><br>
        <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">RUP </a><br>
        <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Video </a><br>
       
       
    </div>
  </div>

  <div class="dropdown " style="display: inline">
      <a class="inia" href="#"  data-toggle="dropdown" style="display: inline;">PPID</a>
      
      <div class="dropdown-menu asd" aria-labelledby="dropdownMenuLink" ">
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Mekanisme Memperoleh Informasi </a><br><br>
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Informasi Setiap Saat </a><br><br>
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Informasi Berkala</a><br><br>
          <a class="dropdown-item" href="#" style="margin: 0px;padding: 0px;">Informasi Serta Merta</a><br>

         
         
      </div>
    </div>
<div class="dropdown">
  <a class="inia" href="javascript:void(0)">Buku Tamu</a>

</div>
<div class="dropdown">
  <a class="inia" href="javascript:void(0)">Technopark</a>

</div>
<div class="dropdown">
  <a class="inia" href="javascript:void(0)">UMKM</a>

</div>
<div class="dropdown">
  <a class="inia" href="javascript:void(0)">Food Security</a>

</div>
<div class="dropdown">
  <a class="inia" href="http://pasarpangan.com/">Pasar Pangan</a>
</div>
</div>
</div>

<div class="navbarwarna">asd</div>
</div>



<h1>Berita Terbaru</h1>
<!-- Isi Konten Disini-->
@role('user')
Auth::user()->name
<h1>haloo</h1>
@endrole
@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div >
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest

@foreach($berita as $g)
<div class="kontenberita baru">
                       <a href="/upload/lihat/{{$g->id}}"> <h1>{{$g->Judul}}</h1></a><br>
                       
						@if($g->file != 0)
							<img src="{{ url('/data_file/'.$g->file) }}" style="width:300px;position:relative;"><br>
						@endif
                        
							<div class="berita"><br>
                            {!! str_limit($g->berita, $limit = 600, $end = '.....')  !!}<br>
					{{$g->created_at}}</div  >
                            </div>	
    
				@endforeach
 



<div class="downbar ">
        <div class="alamat"><h2> <b>A</b>lamat</h2>
            <b>Dinas Ketahanan Pangan Daerah Kabupaten Grobogan</b><br><a> Jl. Dr. Sutomo No.8, Cebok, Kalongan, Kec. Purwodadi, Kabupaten Grobogan, Jawa Tengah 58114 </div>
            </a>
                <div class="linkterkait"><h2>Link Terkait</h2>
      <ul> 
          <li> <a>BKP Pertanian</a></li>
        <li> <a>DKP Prov jateng</a></li>
        <li> <a>Distanbun Prov Jateng</a></li> 
        <li> <a> Dinpertan Grobogan</a> </li>       
       <li> <a> Pemkab Grobogan</a> </li>
    </ul>
    </div>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbartotal");
var content = document.getElementsByClassName("active")[0].offsetTop;
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= content) {
    
    navbar.classList.add("sticky");
    

    
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
