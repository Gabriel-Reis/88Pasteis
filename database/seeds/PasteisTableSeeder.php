<?php

use App\Pastel;
use Illuminate\Database\Seeder;

class PasteisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pastel::create(['nome'=>'Mussarela','preco_unit'=>4,'descricao'=>'Mussarela','salgado'=> 1,'disponivel'=> 1,'categoria'=>'Básicos','created_by'=> 1]);
        Pastel::create(['nome'=>'Carne','preco_unit'=>4.5,'descricao'=>'Carne','salgado'=> 1,'disponivel'=> 1,'categoria'=>'Básicos','created_by'=> 1]);
        Pastel::create(['nome'=>'Pizza','preco_unit'=>5,'descricao'=>'Mussarela, tomate e orégano','salgado'=> 1,'disponivel'=> 1,'categoria'=>'Básicos','created_by'=> 1]);
        Pastel::create(['nome'=>'Toscana','preco_unit'=>5,'descricao'=>'Calabresa toscana, mussarela e cebola','salgado'=> 1,'disponivel'=> 1,'categoria'=>'Básicos','created_by'=> 1]);
    }
}
