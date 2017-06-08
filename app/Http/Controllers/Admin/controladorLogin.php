<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;


class controladorLogin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        $email=$request->email;
        $password=$request->password;
        //return view('admin.categorias.index',compact('email','password'));   
        $tipo='admin';
        $tipo2='usuario';
         if(Auth::attempt(['email'=>$email,'password' =>$password, 'tipo'=>$tipo])) 
        {
            return redirect()->route('panel.index');
        }else
        {
            if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password'], 'tipo'=>$tipo2]))
            {
                Session::flash('message-error','No eres un administrador');  
                return redirect()->route('panel.login.index');
            }else
            {
                Session::flash('message-error','Datos incorrectos');
                return redirect()->route('panel.login.index');
            }       
        }
    }
     public function logout(){
        Auth::logout();
        return view('admin.login');
;    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
