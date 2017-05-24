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
        {!!Form::open(['route'=>'log.store','method'=>'POST', 'role'=>'form'])!!}    
         @include('tienda.parcial.errors') 
            @include('alerts.errors')           
            <div class="form-group" >
             Name
        <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                  Email
        <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                     Password
        <input type="password" name="password">
            </div>
            <div class="form-group">
                  Confirm Password
        <input type="password" name="password_confirmation">
    </div>
            </div>
            <div class="form-group">
                   <button type="submit">Register</button>
            </div>
        {!!Form::close()!!}     
        </div>    
            </div>    
        </div>
    </div>
    </div>
    
@stop
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
      
    </div>

    <div>
      
    </div>

    <div>

    </div>

    <div>
       

    <div>

    </div>
</form>