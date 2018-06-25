<?php

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
        DB::table('users')->insert([
        	'role_id'	=> 3,
        	'is_active' => 1,
        	'name'		=> str_random(10),
        	'email'		=> str_random(10) . '@gmail.com',
        	'password'	=> bcrypt('secret')
        ]);
    }
}
