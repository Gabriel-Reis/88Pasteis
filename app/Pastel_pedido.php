<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pastel_pedido extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    // $this->attributes['updated_at'] = \Carbon\Carbon::now(); 
	// protected $table = 'Pasteis';

	protected $fillable = [
    	'total_parc','quantidade','pedido_id','pastel_id'
    ];
	
	public function setUpdatedAtAttribute($value) { 
	    $this->attributes['updated_at'] = \Carbon\Carbon::now(); 
	}
}
