<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
     protected $table='order_items';

    protected $fillable=['precio','cantidad','producto_id','orden_id'];

    public $timestamps=false;
    public function orden()
    {
    	return $this->belongsTo('App\Order');
    }
    public function producto()
    {
    	return $this->belongsTO('App\Productos');
    }
}
