<?php

Route::get('/tes',function () {

    return view('lamanberita');

});

Route::get('/utama','utamaController@homes');
Route::get('/home','homeController@homes');
//Harga Controller
Route::prefix('harga')->group(function(){
Route::get('/','hargaController@index');
Route::post('/store','hargaController@store');
Route::get('/update','hargaController@updates');
Route::post('/updates','hargaController@updates');
Route::get('/hapus/{id}','hargaController@hapus');
});

//Submenu Controller
Route::prefix('Submenu')->group(function(){
Route::get('/', 'Submenucontroller@Submenu');
Route::post('/store', 'SubmenuController@store');
Route::get('/updates', 'SubmenuController@updates');
Route::get('/hapus/{id}', 'SubmenuController@hapus');
Route::get('/berita/{id}','SubmenuController@berita');
});

//Upload Controller
Route::prefix('upload')->group(function(){
Route::get('/', 'UploadController@upload');
Route::get('/hapus/{id}','UploadController@hapus');
Route::get('/lihat/{id}','UploadController@lihat');
Route::get('/edit/{id}','UploadController@edit');
Route::post('/edit/update','UploadController@updates');
Route::post('/proses', 'UploadController@proses_upload');
});

//Komentar Controller
Route::prefix('komentar')->group(function(){
Route::post('/', 'komentarController@index');
Route::post('/store','komentarController@store');
Route::get('/lihat/{id}','komentarController@updates');
Route::get('/hapus/{id}', 'komentarController@hapus');
});
Route::prefix('lamanberita')->group(function(){
    Route::get('/', 'lamanberitaController@index');
    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
