<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    //
    public function image()
    {
    	return $this->morphOne(Image::class,'imageable');
    }

    public function images()
    {
    	return $this->morphMany(Image::class,'imageable');
    }
}
