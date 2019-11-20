<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    
protected $table="komentar";
public $timestamps = false;
protected $primaryKey="id_komentar";
protected $fillable=['isi_komentar','id_berita', 'id_pengguna','tgl_komentar'];
}
