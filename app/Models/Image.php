<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
	protected $guarded=[];

    public function image()
    {
    	return $this->morphTo();
    }

    public function images()
    {
    	return $this->morphTo();
    }

}
