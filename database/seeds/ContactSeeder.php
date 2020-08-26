<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'customer_id' => '1',
            'name' => 'Helena da Silva',
            'email' => 'helena@abstartups.com.br',
            'phone' => '11955060153',
            'created_at' => now()
        ]);
        DB::table('contacts')->insert([
            'customer_id' => '1',
            'name' => 'Manuel Amorim',
            'email' => 'manuel@abstartups.com.br',
            'phone' => '11995060153',
            'created_at' => now()
        ]);
        DB::table('contacts')->insert([
            'customer_id' => '1',
            'name' => 'Sophia Ferreira',
            'email' => 'sophia@abstartups.com.br',
            'phone' => '11955880153',
            'created_at' => now()
        ]);
        DB::table('contacts')->insert([
            'customer_id' => '2',
            'name' => 'Luiz Costa',
            'email' => 'luiz@cowmed.com.br',
            'phone' => '55932264820',
            'created_at' => now()
        ]);
        DB::table('contacts')->insert([
            'customer_id' => '2',
            'name' => 'Lorena Oliveira',
            'email' => 'lorena@cowmed.com.br',
            'phone' => '55952261822',
            'created_at' => now()
        ]);
        DB::table('contacts')->insert([
            'customer_id' => '2',
            'name' => 'Mario Luiz Ferreira',
            'email' => 'mario@cowmed.com.br',
            'phone' => '55931254829',
            'created_at' => now()
        ]);
        DB::table('contacts')->insert([
            'customer_id' => '3',
            'name' => 'Cecília Pereira',
            'email' => 'cecilia@neemo.com.br',
            'phone' => '14957318909',
            'created_at' => now()
        ]);
        DB::table('contacts')->insert([
            'customer_id' => '3',
            'name' => 'Antônio Rodrigues',
            'email' => 'antonio@neemo.com.br',
            'phone' => '14954318975',
            'created_at' => now()
        ]);
        DB::table('contacts')->insert([
            'customer_id' => '3',
            'name' => 'Beatriz Almeida',
            'email' => 'beatriz@neemo.com.br',
            'phone' => '14987515906',
            'created_at' => now()
        ]);
    }
}
