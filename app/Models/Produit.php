<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    public function image()
    {
    	return $this->morphOne(Image::class,'imageable');
    }
}
