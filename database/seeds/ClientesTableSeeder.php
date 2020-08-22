<?php

use App\Cliente;
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'name'      	=> 'Gabriel',
            'email'     	=> 'requenareis@gmail.com',
            'password'  	=> bcrypt('admin'),
            'telefone'		=> '(11)11111-1111',
            'endereco'		=> 'Rua x',
            'complemento'	=> 'Apt xx',
            'bairro'		=> 'bairro X',
            'cep'			=> '11111-cep',
            'cpf'			=> '111.111.111-11',
            'cidade'		=> 'são paulo',
            'estado'		=> 'são paulo',
            'data_nasc'		=> '01/01/0001',
            'tipo'			=> '1' //adm
        ]);
    }
}
