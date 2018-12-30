<?php

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
        User::create([
        	'name' => 'Daniel Agudelo',
        	'email' => 'daniel.agudelo5168@unaula.edu.co',
        	'password' => bcrypt('0366825'),
        ]);
    }
}
