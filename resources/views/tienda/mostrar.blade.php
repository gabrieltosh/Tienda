@extends('tienda.template')

@section('contenido')

<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i>Detalle del Producto</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="product-block">
                <img src="{{$producto->imagen}}" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-block panel">
                <h3>{{$producto->name}}</h3>
                <div class="product-info panel">
                    <p>{{$producto->descripcion}}</p>
                    <h3><span class="label label-success">Precio:{{ number_format($producto->precio,2)}}</span></h3>
                    <p>
                        <a href="{{route('cart-add',$producto->slug)}}" class="btn btn-warning btn-block"> La quiero <i class="fa fa-cart-plus fa-2xs"></i></a>
                    </p>
                </div>       
            </div>
        </div>
    </div><br>
    <p><a href="{{route('home')}}" class="btn btn-primary" ><i class="fa fa-chevron-circle-left"></i> Regresar</a></p>
</div>
@stop