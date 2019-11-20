<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "berita";
    protected $fillable = ['file','Judul','Berita','jenis'];
    
}