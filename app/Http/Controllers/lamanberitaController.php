<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\berita;
class lamanberitaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table berita
    	$berita = berita::orderBy('created_at','desc')->get();
    	// mengirim data berita ke view index
    	return view('lamanberita',['berita' => $berita]);	
    }
}
