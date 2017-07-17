<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    //
    protected $table = "kelurahan";
        public $incrementing = false;


    public function property(){
    	return $this->belongsTo('App\Property');
    }
    public function kecamatan(){
    	return $this->belongsTo('App\Kecamatan');
    }

}
