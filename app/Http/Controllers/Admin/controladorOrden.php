<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;

class controladorOrden extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$ordenes = Order::orderBy('created_at','desc')->paginate(5);
    	return view('admin.pedidos.index',compact('ordenes'));
    }
    public function items(Request $request)
    {
    	$items=OrderItem::with('producto')->where('orden_id',$request->get('orden_id'))->get();
    	return json_encode($items);
    }
    public function destroy($id)
    {
    	$orden = Order::findOrFail($id);
    	$deleted = $orden->delete();
    	Session::flash('message','Pedido Eliminado Correctamente');
    	return redirect()->route(panel.order.index);
    }
}
