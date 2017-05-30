<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Productos;
use Auth;
use Session;

class controladorCart extends Controller
{
    public function __construct()
    {
    	if(!\Session::has('cart')) \Session::put('cart',array());
    }

    public function show()
    {
    	 $cart = \Session::get('cart');
         $total = $this->total();
         return view('tienda.cart',compact('cart','total'));
    }
    public function add(Productos $producto)
    {
    	$cart =\Session::get('cart');
    	$producto->cantidad=1;
    	$cart[$producto->slug]=$producto;
    	\Session::put('cart',$cart);
    	return redirect()->route('cart-show');
    }
    public function delete(Productos $producto)
    {
        $cart = \Session::get('cart');
        unset($cart[$producto->slug]);
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');
    }
    public function update(Productos $producto, $cantidad)
    {
        $cart=\Session::get('cart');
        $cart[$producto->slug]->cantidad=$cantidad;
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');   
    }
    public function trash()
    {
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }
    private function total()
    {
        $cart = \Session::get('cart');
        $total=0;
        foreach($cart as $item)
        {
            $total+=$item->precio*$item->cantidad;
        }
        return $total;
    }
    public function orderDetail()
    {   
        if(Auth::check())
        {   
            $cart=\Session::get('cart');
            $total = $this->total();
            return view('tienda.order-detail',compact('cart','total'));
        }else{
             return redirect()->route('log.index');
        }
    }
}
