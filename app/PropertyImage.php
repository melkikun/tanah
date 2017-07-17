<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    //
    protected $table = "property_image";

    public function property(){
    	return $this->belongsTo('App\Property');
    }
}
