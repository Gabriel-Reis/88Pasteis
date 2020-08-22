<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status_pedido extends Model
{
	protected $table = 'status_pedidos';
	public $timestamps = false;

    protected $fillable = [
    	'descricao'
    ];
}
