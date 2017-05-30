@extends('tienda.template')

@section('contenido')
    <br><br>
    <div class="container text-center">
        <div class="page-header">
            <h3><i class="fa fa-user"> Crear Cuenta</i></h3>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page">
            <div class="jumbotron">
        {!!Form::open(['route'=>'user.store','method'=>'POST', 'role'=>'form'])!!}    
         @include('tienda.parcial.errors') 
            @include('alerts.errors')           
            <div class="form-group" >
                 <label for="name" class="">Nombre</label><br>
                <input type="text" name="nombre" value="{{ old('name') }}">
            </div>
            <div class="form-group" >
                 <label for="" class="">Apellido</label><br>
                <input type="text" name="apellido" >
            </div>            
            <div class="form-group">
                 <label for="email" class="">Correo</label><br>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                 <label for="user" class="">Usuario</label><br>
                <input type="text" name="usuario" >
            </div>
            <div class="form-group">
                <label for="password" class="">Contraseña</label><br>
                <input type="password" name="password">
            </div>
            <div class="form-group">
                  <label for="password" class="">Confirmar Contraseña</label><br>
               <input type="password" name="password_confirmation">
            </div>
            <div class="form-group">
                 <label for="" class="">Direccion</label><br>
                 <input type="text" name="direccion">
            </div>
            <div class="form-group">
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary btn-block'])!!}
            </div>
            <div class="form-group">
                  <a class="btn btn-warning" href="{{route('log.index')}}"><i class="fa fa-chevron-circle-left"></i> Cancelar</a> 
            </div>
        {!!Form::close()!!}     
        </div>    
            </div>
            </div>    
        </div>
    </div>
@stop
