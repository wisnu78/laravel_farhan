<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function gudang(){
    	return $this->belongsTo(Gudang::class);
    }

}
