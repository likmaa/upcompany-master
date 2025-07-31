<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    //
    public function image()
    {
    	return $this->morphOne(Image::class,'imageable');
    }
}
