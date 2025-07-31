<?php

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Categorie::firstOrCreate(['name' =>'uncategorised']);
    }
}
