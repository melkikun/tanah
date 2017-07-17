<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    //
    protected $table = "kecamatan";

    public function kelurahan(){
    	return $this->hasMany('App\Kelurahan');
    }

    public function kabupaten(){
    	return $this->belongsTo('App\Kabupaten');
    }
}
