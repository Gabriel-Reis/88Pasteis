<?php

use App\Status_pedido;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status_pedido::create([ 'descricao'	=> 'Novo pedido']);
        Status_pedido::create([ 'descricao'	=> 'Em andamento']);
        Status_pedido::create([ 'descricao'	=> 'Em entrega']);
        Status_pedido::create([ 'descricao'	=> 'Finalizado']);
    }
}
