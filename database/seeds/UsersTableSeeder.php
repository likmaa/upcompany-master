<?php

use App\Models\Newsletter;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        	'name' =>'emmanuel',
        	'email' =>'emmanuel@upcompany.co',
        	'password' =>Hash::make('Upc@Cpan19'),
        	'email_verified_at' => now(), 
		]);

        Newsletter::create([
            'name'  =>'AGBOGNON GASTON',
            'email' =>'gaston.agbognon@energy4impact.org',
        ]);

        Newsletter::create([
            'name'  =>'Ismen',
            'email' =>'fabriceismen@gmail.com',
        ]);

        Newsletter::create([
            'name'  =>'Emmanuel',
            'email' =>'emmanueldev920@gmail.com',
        ]);

        
    }
}
