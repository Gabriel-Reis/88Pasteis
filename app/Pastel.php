<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pastel extends Model
{
	use SoftDeletes;
	protected $table = 'Pasteis';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nome','preco_unit','foto','descricao','salgado','disponivel','categoria',
    ];
}