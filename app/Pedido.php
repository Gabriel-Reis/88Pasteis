<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use SoftDeletes;
	protected $table = 'Pedidos';
	// public $timestamps = false;

    protected $fillable = [
    	'total','obs','cpf_nfp','deleted_at','cliente_id','forma_pag_id','cupom_id','status_pedido_id'
    ];

}
