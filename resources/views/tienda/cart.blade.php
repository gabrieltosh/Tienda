@extends('tienda.template')

@section('contenido')
<br><br>
	<div class="container text-center">
    	<div class="page-header">

        	<h3><i class="fa fa-shopping-cart"></i> Carrito de Compras</h3>
    	</div>
    	<div class="jumbotron">
    	<div class="table-cart">
    	@if(count($cart))
    	<p>
    		<a href="{{route('cart-trash')}}" class="btn btn-danger text-center" >
    			Vaciar Carrito <i class="fa fa-trash fa-2x"></i>
    		</a>
    	</p><br>
		<div class="lable-responsive">
			<table class="table table-bordered table-condensed" >
					<tr>
						<th class="warning text-center">Imagen</th>
						<th class="warning text-center">Producto</th>
						<th class="warning text-center">Precio</th>
						<th class="warning text-center">Cantidad</th>
						<th class="warning text-center">Subtotal</th>
						<th class="warning text-center">Quitar</th>
					</tr>
	
					@foreach($cart as $item)
					<tr>
						<td class="text-center"><img src="{{$item->imagen}}" class="tamaño2" alt=""> </td>
						<td class="text-center">{{$item->name}}</td>
						<td class="text-center">{{number_format($item->precio,2)}}</td>
						<td class="text-center">
							<input 
								type="number"
								min="1"
								max="100"
								value="{{$item->cantidad}}"
								id="producto_{{$item->id}}"
							>	
							<a 
								href="#" 
								class="btn btn-warning btn-update-item"
								data-href="{{route('cart-update', $item->slug)}}"
								data-id="{{$item->id}}"
							>
								<i class="fa fa-refresh"></i>
							</a>						
						</td>
						<td class="text-center">{{number_format($item->precio * $item->cantidad,2)}}</td>
						<td class="text-center">
							<a href="{{route('cart-delete', $item->slug)}}" class="btn btn-danger">
									<i class="fa fa-remove"></i>
							</a>
						</td>
					</tr>	
					@endforeach
	
			</table><hr>
			<h3><span class="label label-success">Total: ${{number_format($total,2)}}
			</span></h3>
		</div>
		@else
			<h3><span class="label label-warning">No hay Productos en el Carrito</span></h3>
		@endif
		<hr>
		<p>
			<a href="{{route('home') }}" class="btn btn-primary">
				<i class="fa fa-chevron-circle-left fa-2x"></i>  Seguir Comprando
			</a>
			<a href="{{route('order-detail')}}" class="btn btn-primary">
				 Continuar  <i class="fa fa-chevron-circle-right fa-2x"></i>
			</a>
		</p>
		</div>
		</div>
    </div>
@stop