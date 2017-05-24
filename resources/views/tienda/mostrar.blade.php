@extends('tienda.template')

@section('contenido')
<br><br>
<div class="container text-center">
    <div class="page-header">
        <h3><i class="fa fa-shopping-cart"></i> Detalle del Producto</h3>
    </div>
    <div class="jumbotron">
    <div class="page">
        <div class="col-md-6">
            <div class="product-block">
                <img src="{{$producto->imagen}}" class="tamaño3" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-block ">
                <h3>{{$producto->name}}</h3>
                <div class="product-info ">
                    <p>{{$producto->descripcion}}</p>
                    <h2><span class="label label-success">Precio:{{ number_format($producto->precio,2)}}</span></h2><br>
                    <p>
                        <a href="{{route('cart-add',$producto->slug)}}" class="btn btn-warning btn-block"> La quiero <i class="fa fa-cart-plus fa-2x"></i></a>
                    </p>
                </div>       
            </div>
        </div>
    </div><br>
    <p><a href="{{route('home')}}" class="btn btn-primary" ><i class="fa fa-chevron-circle-left fa-2x"></i> Regresar</a></p>
    </div>
</div>
@stop