<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categorias extends Model
{
	use SoftDeletes;
 
	protected $table= 'categorias';
    protected $fillable  = [
        'nombre','slug','descripcion','color'
    ];
    protected $dates = ['deleted_at'];

    public function productos()
    {
    	return $this->hasMany('App\Productos');
    }
}
