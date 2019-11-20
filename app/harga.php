<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harga extends Model
{
    
protected $table="harga";
protected $primaryKey="id_harga";
protected $fillable=['nama_pangan','harga', 'satuan'];

}
