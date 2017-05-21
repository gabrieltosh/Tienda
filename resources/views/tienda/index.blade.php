@extends('tienda.template')

@section('contenido')
@include('tienda.parcial.slider')
<div class="container text-center">
    <div id="products">
        @foreach($productos as $producto)
            <div class="product white-panel">
                <h3>{{ $producto->name}}</h3><br>
                <img src="{{$producto->imagen}}" alt="">
                <div class="product-info panel">
                    <p>{{$producto->extraer}}</p>
                    <h3><span class="label label-success">Precio: ${{number_format($producto->precio,2)}}</span></h3>
                    <p>
                        <a class="btn btn-warning" href="{{route('cart-add',$producto->slug)}}"> <i class="fa fa-cart-plus"></i> La Quiero</a>
                        <a class="btn btn-primary" href="{{route('producto-detalle',$producto->slug)}}"><i class="fa fa-chevron-circle-right"></i> Leer mas</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@stop