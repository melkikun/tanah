<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = "property";

    public function propertyImage(){
    	return $this->hasMany('App\PropertyImage');
    }

    public function type(){
    	return $this->belongsTo('App\Type');
    }

    public function jenis(){
    	return $this->belongsTo('App\Jenis');
    }

    public function statusProperty(){
        return $this->hasOne("App\StatusProperty");
    }

     public function kelurahan(){
        return $this->belongsTo('App\Kelurahan');
    }
}
