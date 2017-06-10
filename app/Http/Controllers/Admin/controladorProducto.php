<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Categorias;
use Session;

class controladorProducto extends Controller
{
        public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $productos = Productos::orderBy('id','desc')->paginate(5);
        return view('admin.productos.index' ,compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categorias::orderBy('id','desc')->lists('nombre','id');
       return view('admin.productos.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visible=1;
        $productos=new Productos;
        $productos->name=$request->name;
        $productos->slug=str_slug($request->name);
        $productos->descripcion=$request->descripcion;
        $productos->extraer=$request->extraer;
        $productos->precio=number_format($request->precio,2);
        $productos->imagen=$request->imagen;
        $productos->visible=$visible;
        $productos->categoria_id=$request->categoria_id;
        $productos->save();
        Session::flash('message','El registro fue exitoso');
        return redirect()->route('panel.producto.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $producto)
    {
        return $producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Productos $producto)
    {
        $categorias=Categorias::orderBy('id','desc')->lists('nombre','id');
       return view('admin.productos.edit',compact('categorias','producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productos $producto)
    {
        $visible=1;
        $producto->fill($request->all());
        $producto->slug = str_slug($request->get('name'));
        $producto->visible=$visible;
        $update = $producto->save();
        Session::flash('message','La Actualizacion fue exitosa');
        return redirect()->route('panel.producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productos $producto)
    {
        $deleted=$producto->delete();
        Session::flash('message','El registro fue eliminado correctamente');
        return redirect()->route('panel.producto.index');
    }
}
