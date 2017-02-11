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
        //make a default admin user
        DB::table('users')->insert([
            'email' => 'bleh@example.com',
            'name'=> 'Alex Wacker',
            'password' => bcrypt('admin'),
            'created_at' => '2016-12-09 04:12:10',
            'updated_at' => '2016-12-09 04:12:10'
        ]);
    }
}
