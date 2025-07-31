<?php

use App\User;
use Illuminate\Database\Seeder;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
        	'name' =>'oscar',
        	'email' =>'oscar@upcompany.co',
        	'password' =>Hash::make('Upcompany2019'),
        	'email_verified_at' => now(), 
		]);
		User::create([
        	'name' =>'yolande',
        	'email' =>'yolandezanmenou@upcompany.co',
        	'password' =>Hash::make('Upcompany2019'),
        	'email_verified_at' => now(), 
		]);
    }
}
