<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
	  protected $table='productos';
      protected $fillable = [
        'name', 'slug', 'descipcion','extraer','precio','imagen','visible','categoria_id'
            ];

      public function categoria()
      {
      	return $this->belongsTo('App\Categorias');
      }
}
