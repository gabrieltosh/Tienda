<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;

class ControladorTienda extends Controller
{
    public function index()
    {
        $productos=Productos::all();
        //dd($productos);
        return view('tienda.index',compact('productos'));
    }
    public function show($slug)
    {
        $producto= Productos::where('slug',$slug)->first();
       // dd($producto);
       return view('tienda.mostrar',compact('producto'));
    }
}
