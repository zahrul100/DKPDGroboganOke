<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SubmenuController extends Controller
{
    public function Submenu()
    {
        // mengambil data dari table harga
    	$berita = DB::table('berita')->get();
    	// mengirim data harga ke view index
    	return view('Submenu',['berita' => $berita]);
    }

    public function store(Request $request)
    {
        DB::table('berita')->insert([
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            ]);
        return redirect ('/Submenu');
    }
    
    public function edit($id)
    {
        $harga = DB::table('berita')->where('id_berita', $id)->get();
        return view('Submenu', ['berita' => $berita]);
    }

    public function updates(Request $minta)
    {
        DB::table('berita')->where('id_berita', $minta->id)->updates
        ([
            'judul_berita' => $minta -> judul_berita,
            'isi_berita' =>$minta -> isi_berita
        ]);
        return redirect('/Submenu');
    }

    public function hapus($id)
    {
        DB::table('berita')->where('id_berita', $id)->delete();
        return redirect('/Submenu');
    }

    public function berita()
    {
        $berita = DB::table('berita')->get();
        return view('berita', ['berita' => $berita]);    
        return redirect('/Submenu');
    }
 
}