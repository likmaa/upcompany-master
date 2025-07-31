<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
    public function image()
    {
    	return $this->morphOne(Image::class,'imageable');
    }
}
