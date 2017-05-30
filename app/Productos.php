<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
      protected $fillable = [
        'name', 'slug', 'descipcion','extraer','precio','imagen','visible','categoria_id'
            ];

}
