<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\berita;
class utamaController extends Controller
{
    public function homes()
    {
    	// mengambil data dari table harga
		$harga = DB::table('harga')->get();
    	$berita = berita::orderBy('created_at','desc')->take(3)->get();
		$beritapertama = berita::orderBy('created_at','desc')->first();
		$beritaterbaru = berita::orderBy('created_at','desc')->skip(1)->take(5)->get();
		
    	// mengirim data harga ke view index
    	return view('utama',['harga' => $harga,'berita' => $berita,'beritaterbaru' => $beritaterbaru,'beritapertama' => $beritapertama]);	
    }
}
