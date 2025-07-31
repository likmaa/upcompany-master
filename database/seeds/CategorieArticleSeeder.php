<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class CategorieArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $articles=Article::all();
        
        $articles->each(function($value){
            $value->categories()->attach(1);
        });
    }
}
