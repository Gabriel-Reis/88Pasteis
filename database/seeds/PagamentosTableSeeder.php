<?php

use App\Pagamento;
use Illuminate\Database\Seeder;

class PagamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pagamento::create([ 'descricao'	=> 'Cartão de crédito']);
        Pagamento::create([ 'descricao'	=> 'Cartão de débito']);
        Pagamento::create([ 'descricao'	=> 'Dinheiro']);
        Pagamento::create([ 'descricao'	=> 'Por aproximação']);
        Pagamento::create([ 'descricao'	=> 'PicPay']);
        Pagamento::create([ 'descricao'	=> 'Mercado Pago']);
    }
}
