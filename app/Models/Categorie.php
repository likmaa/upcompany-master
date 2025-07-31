<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $guarded=[];
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function($article){
            $article->alias=Str::slug($article->name);
        });
    }
    
}
