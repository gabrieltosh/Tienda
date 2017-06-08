<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoriaRequest;
use App\Http\Controllers\Controller;

use App\Categorias;
use Session;
class controladorCategoria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=Categorias::orderBy('id','desc')->paginate(5);
        //dd($categorias);
        return view('admin.categorias.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaRequest $request)
    {  
        $categoria=Categorias::create([
            'nombre'=>$request->get('nombre'),
            'slug'=>str_slug($request->get('nombre')),
            'descripcion'=>$request->get('descripcion'),
            'color'=>$request->get('color'),
            ]);
        Session::flash('message','El registro fue exitoso');
        return redirect()->route('panel.categoria.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categorias $categoria)
    {
        return $categoria;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorias $categoria)
    {
        return view('admin.categorias.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Categorias $categoria)
    {
        $categoria->fill($request->all());
        $categoria->slug = str_slug($request->get('nombre'));
        $update = $categoria->save();
        Session::flash('message','La Actualizacion fue exitosa');
        return redirect()->route('panel.categoria.index');
    }

    public function destroy(Categorias $categoria)
    {
        $deleted=$categoria->delete();
        Session::flash('message','Categoria Eliminada Corectamente');
        return redirect()->route('panel.categoria.index');
    }
}
