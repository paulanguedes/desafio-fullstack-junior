<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Paula Guedes',
            'email' => 'paulanguedes@gmail.com',
            'password' => '123456'
        ]);
        DB::table('users')->insert([
            'name' => 'Guest',
            'email' => 'guest@gmail.com',
            'password' => '123456'
        ]);
    }
}
