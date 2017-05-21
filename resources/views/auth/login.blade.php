@extends('tienda.template')

@section('contenido')
    @include('alerts.errors')
    @include('alerts.request')
    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-user">Iniciar session</i></h1>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="page">
            @include('tienda.parcial.errors')
            
        {!!Form::open(['route'=>'log.store','method'=>'POST'])!!}                
            <div class="form-group" >
                <label for="email" class="">Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password" class="">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember"> Remember Me
            </div>
            <div class="form-group">
                 {!!Form::submit('Iniciar',['class'=>'btn btn-primary btn-block'])!!}
            </div>
            {!!Form::close()!!}
        </form>
                </div>
            </div>    
        </div>
    </div>
    
@stop