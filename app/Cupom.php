<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cupom extends Model
{
    use SoftDeletes;
	protected $table = 'Cupons';

    protected $fillable = [
    	'code','descricao','date_ini','date_end','created_by','desconto'
    ];
}


