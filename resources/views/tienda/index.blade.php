@extends('tienda.template')

@section('contenido')
@include('tienda.parcial.nav-slider')

<section id="content">
    <div class="container_24">
    @foreach($productos as $producto)
      <div class="grid_5 prefix_1">
            <div class="main">

        <div class="text-1">
            <span> <p> </p>{{$producto->id}}</span>
            <strong>{{ $producto->name}}</strong>
        </div>
          </div>
        <div class="img-border">
            <img src="{{$producto->imagen}}" alt="" class="tamaño1">
        </div>
        <p class="it p-border">{{$producto->extraer}}</p>
        <p class="clr-1 it bold top-1">Precio: ${{number_format($producto->precio,2)}}</p>
            <a class="btn btn-warning" href="{{route('cart-add',$producto->slug)}}"> <i class="fa fa-cart-plus"></i> La Quiero</a>
        <a class="btn btn-primary" href="{{route('producto-detalle',$producto->slug)}}"><i class="fa fa-chevron-circle-right"></i> Leer mas</a>

       </div>
         @endforeach
    </div>
  </section>
@stop