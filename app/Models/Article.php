<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    //
    protected $guarded=[];

    protected $with=['categorie'];
    
    public function image()
    {
    	return $this->morphOne(Image::class,'imageable');
    }


    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function author()
    {
        return $this->createdBy()->get();

        // A voir tout à l'heure
        $user=$this->createdBy()->get();
        if ($user != null) {
            
            $user->fullname();
        }
        return $this->belongsTo('App\User');
    }

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }

    public static function published()
    {
        return Article::where('state',1);
    }
}
