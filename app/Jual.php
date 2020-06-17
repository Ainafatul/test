<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jual extends Model
{
    protected $table ="juals";
    protected $fillable =["kategori","nm_properti","image","kmr_mandi","kmr_tidur","lantai","luas_tanah","luas_bangunan","alamat","harga","keterangan"];

    
}
