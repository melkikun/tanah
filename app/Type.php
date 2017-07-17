<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $table = "type";
    public $primaryKey = "id"; 

    public function property(){
    	return $this->hasMany('App\Property');
    }
}
