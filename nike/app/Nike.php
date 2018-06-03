<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
class Nike extends Model
{
    
protected $fillable= ['name','price','image','description'];


public function getImageAttribute($image)
{
	return asset($image);
	
}


    }
