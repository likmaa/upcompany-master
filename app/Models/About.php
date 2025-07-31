<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
	protected $guarded=[];
    public function image()
    {
    	return $this->morphOne(Image::class,'imageable');
    }
}
