<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
        	'name' => 'Daniel',
        	'email'=> 'danielpumayauli@gmail.com',
        	'password'=> bcrypt('123456')
        ]);

        factory(User::class, 12)->create();


    }
}
