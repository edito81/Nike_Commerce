<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Women extends Model
{
    protected $fillable= ['name','price','image','description'];

    public function getImageAttribute($image)
{
	return asset($image);
	
}
public function Nike(){


	return $this->belongsTo('App\Nike');
	
}
}
