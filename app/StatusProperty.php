<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusProperty extends Model
{
    //
    protected $table = "status_property";

    public function property(){
    	return $this->hasOne('App\Property');
    }
}
