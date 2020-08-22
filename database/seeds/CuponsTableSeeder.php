<?php

use App\Cupom;
use Carbon\Carbon;
// use DateTime;
use Illuminate\Database\Seeder;

class CuponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cupom::create([
        	'code'			=> 'CP001X',
        	'descricao'		=> 'Cupom inicial',
        	'date_ini'		=> 	Carbon::now(),
        	// 'date_ini'		=> '1598129379',
        	'date_end'		=> Carbon::now()->addMonths(2),
        	// 'date_end'		=> '1603399755',
        	'created_by'	=> '1',
        	'desconto'		=> '10',
        ]);
    }
}
