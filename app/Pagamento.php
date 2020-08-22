<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pagamento extends Model
{
    use SoftDeletes;
    public $timestamps = false;
	// protected $table = 'Pasteis';

    protected $fillable = [
    	'descricao'
    ];
}
