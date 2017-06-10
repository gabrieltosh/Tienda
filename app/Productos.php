<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Productos extends Model
{
	use SoftDeletes;
	  protected $table='productos';
      protected $fillable = [
        'name', 'slug', 'descipcion','extraer','precio','imagen','visible','categoria_id'
            ];

      public function setImagenAttribute($imagen){
      if(! empty($imagen)){
            $name = Carbon::now()->second.$imagen->getClientOriginalName();
            $this->attributes['imagen'] = $name;
            \Storage::disk('local')->put($name, \File::get($imagen));
      }
      }
      public function categoria()
      {
      	return $this->belongsTo('App\Categorias');
      }
      public function orden_items()
      {
      	return $this->hasOne('App\OrderItem');
      }
}

