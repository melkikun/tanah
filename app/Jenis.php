<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    //
    protected $table = "jenis";
    public $primaryKey = "id";

    public function property(){
    	return $this->hasMany('App\Property');
    }
}
