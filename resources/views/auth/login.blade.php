@extends('tienda.template')

@section('contenido')

    <br><br>
    <div class="container text-center">
        <div class="page-header">
            <h3><i class="fa fa-user"> Iniciar session</i></h3>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page">
           
            <div class="jumbotron">
        {!!Form::open(['route'=>'log.store','method'=>'POST', 'role'=>'form'])!!}    
            @include('tienda.parcial.errors') 
            @include('alerts.errors')           
            <div class="form-group" >
                <label for="email" class="">Email</label><br>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password" class="">Contraseña</label><br>
                <input type="password" name="password" id="password">
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember"> Remember Me
            </div>
            <div class="form-group">
                 {!!Form::submit('Iniciar',['class'=>'btn btn-primary btn-block'])!!}
            </div>
            <div class="form-group">
                <a class="clr-1 it bold top-1" href="">Olvide la Contraseña</a> 
            </div>
            <div class="form-group">
            <a class="btn btn-warning" href="{{route('user.create')}}"><i class="fa fa-user"></i> Crear una Cuenta</a> 
            </div>
        {!!Form::close()!!}     
        </div>    
            </div>    
        </div>
    </div>
    </div>
    
@stop