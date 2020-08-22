<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientesTableSeeder::class);
        $this->call(PasteisTableSeeder::class);
        $this->call(CuponsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(PagamentosTableSeeder::class);
        $this->call(PedidosTableSeeder::class);
        $this->call(PastelPedidosTableSeeder::class);
    }
}
