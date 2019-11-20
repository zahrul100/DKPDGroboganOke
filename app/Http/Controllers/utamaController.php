<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class utamaController extends Controller
{
    public function homes()
    {
    	// mengambil data dari table harga
    	$harga = DB::table('harga')->get();
    	// mengirim data harga ke view index
    	return view('utama',['harga' => $harga]);	
    }
}
