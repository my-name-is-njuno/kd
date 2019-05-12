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
        DB::table('users')->insert([
        	'name'=>'Dr Arnold',
        	'email'=>'arneld@yahoo.com',
        	'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
        	'name'=>'Dr Halima',
        	'email'=>'drsebit@yahoo.com',
        	'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
        	'name'=>'Lgds',
        	'email'=>'lavingtongreendentalsuite@gmail.com',
        	'password' => bcrypt('password')
        ]);
    }
}
