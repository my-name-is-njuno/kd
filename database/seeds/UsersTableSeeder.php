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
        	'email'=>'arneddie@yahoo.com',
        	'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
        	'name'=>'Dr Halima',
        	'email'=>' limatibes@yahoo.com',
        	'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
        	'name'=>'Lgds',
        	'email'=>'lavingtongreendental@gmail.com',
        	'password' => bcrypt('password')
        ]);


        DB::table('users')->insert([
            'name'=>'Petero',
            'email'=>'pmnjuno@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
