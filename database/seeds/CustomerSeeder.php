<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'customer' => 'Associação Brasileira de Startups',
            'email' => 'contato@abstartups.com.br',
            'phone' => '1155060153',
            'created_at' => now()
        ]);
        DB::table('customers')->insert([
            'customer' => 'Cowmed',
            'email' => 'comercial@cowmed.com.br',
            'phone' => '5532264825',
            'created_at' => now()
        ]);
        DB::table('customers')->insert([
            'customer' => 'Neemo',
            'email' => 'comercial@neemo.com.br',
            'phone' => '1437370909',
            'created_at' => now()
        ]);
    }
}
