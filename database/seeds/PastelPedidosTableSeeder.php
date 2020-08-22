<?php

use App\Pastel_Pedido;
use Illuminate\Database\Seeder;

class PastelPedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pastel_pedido::create([
            'pedido_id'			=> 1,
            'pastel_id'			=> 4,
            'quantidade'		=> 2,
        	'total_parc'		=> 10,
        ]);
        Pastel_pedido::create([
            'pedido_id'			=> 1,
            'pastel_id'			=> 2,
            'quantidade'		=> 1,
        	'total_parc'		=> 4.5,
        ]);
    }
}
