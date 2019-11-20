<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\komentar;
class komentarController extends Controller
{
    public function index()
    {
        // mengambil data dari table komentar
    	$isi_komentar = komentar::get();
    	// mengirim data harga ke view index
        return view('/komentar',['komentar' => $isi_komentar]);

    }
    
    public function store(Request $request)//untuk menyimpan store
    {
        komentar::create([
            'isi_komentar' => $request->isi_komentar,
            'id_berita'    => $request->id,
            'id_pengguna'    => 1,
            ]);
        return back();
    }

    // public function updates(Request $request)
    // {
    //     return $request->isi_komentar;
    // }

    public function hapus($id)//untuk menghapus komentar yang tersedia 
	{
            komentar::where('id_komentar', $id)->delete();
            return redirect()->back();
        
    }
}



