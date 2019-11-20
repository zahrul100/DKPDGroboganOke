<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use App\Gambar;
use App\berita; 
use App\komentar; 
class UploadController extends Controller
{
	public function upload(){
		$gambar = Gambar::get();
		return view('upload',['gambar' => $gambar]);
		
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'file|image|mimes:jpeg,png,jpg|max:2048',
			'judul' => 'required',
			'berita' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file

		$file = $request->file('file');
			if($file != NULL){
		$nama_file = time()."_".$file->getClientOriginalName();
 
				  // isi dengan nama folder tempat kemana file diupload
				  
		$tujuan_upload = 'data_file';

		$file->move($tujuan_upload,$nama_file);
			}
			else{
				
				$nama_file='';

			}
		Gambar::create([

			'file' => $nama_file,
			'Judul' => $request->judul,
			'Berita' => $request->berita,
			'jenis'	=> 2,
		
			]);
 
		return redirect()->back();
	}

	public function hapus($id){
		berita::where('id',$id)->delete();
		return redirect('/upload');
	}
	public function lihat($id){

		$gambar =berita::where('id',$id)->get();
		$komentar = komentar::where('id_berita', $id)->get();
		
		return view('berita',['berita' => $gambar, 'komentar' =>$komentar]);

}
	public function edit($id){
		$edit =DB::table('berita')->where('id',$id)->get();
		
		return view('editform',['edit' => $edit]);

	}
	public function updates(Request $request){
	
		$waktu = Carbon::now()->toDateTimeString();

		berita::where('id',$request->id)->update
		([

		'Judul' => $request->Judul,
		'Berita' => $request->berita,
		'updated_at' =>$waktu,
		]);
		$nama = "upload/lihat/";
		$id = $request->id;
		$link=$nama.$id;	

		return redirect::to($link);
	}


}