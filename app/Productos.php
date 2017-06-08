<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productos extends Model
{
	use SoftDeletes;
	  protected $table='productos';
      protected $fillable = [
        'name', 'slug', 'descipcion','extraer','precio','imagen','visible','categoria_id'
            ];

      public function categoria()
      {
      	return $this->belongsTo('App\Categorias');
      }
}
