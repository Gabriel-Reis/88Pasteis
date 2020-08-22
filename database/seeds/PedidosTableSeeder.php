<?php

use App\Pedido;
use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedido::create([
        	'cliente_id'	=> 1,
            'status_pedido_id'  => 1,
        	'forma_pag_id'		=> 4,
        	'cpf_nfp'		=> 	'112.112.112-12',
        	'total'			=> 18.5,
        ]);
    }
}
