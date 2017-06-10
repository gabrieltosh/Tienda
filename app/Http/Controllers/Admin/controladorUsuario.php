<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UsuarioRequest;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Auth;
class controladorUsuario extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $usuarios=User::OrderBy('id','desc')->paginate(5);
        return view('admin.usuarios.index',compact('usuarios'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        $tipo='admin';
        $activo=1;
        $usuario= new User;
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->email=$request->email;
        $usuario->usuario=$request->usuario;
        $usuario->password=$request->password;
        $usuario->imagen=$request->imagen;
        $usuario->tipo=$tipo;
        $usuario->activo=$activo;
        $usuario->direccion=$request->direccion;
        $usuario->save();
        Session::flash('message','El registro fue exitoso');
        return redirect()->route('panel.usuario.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        return view('admin.usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $activo=1;
        $tipo='admin';
        $usuario->fill($request->all());
        $usuario->activo=$activo;
        $usuario->tipo=$tipo;
        $update=$usuario->save();
        Session::flash('message','Registro Actualizado Correctamente');
        return redirect()->route('panel.usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        $deleted=$usuario->delete();
        Session::flash('message','Registro Eliminado Correctamente');
        return redirect()->route('panel.usuario.index');
    }
}
