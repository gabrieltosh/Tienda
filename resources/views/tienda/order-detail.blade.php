@extends('tienda.template')
@section('contenido')
<br><br>
	<div class="container text-center">
		<div class="page-header">
			<h3><i class="fa fa-shopping-cart"> Detalle Pedido</i></h3>
		</div>
		   <div class="jumbotron">
		<div class="page">
			<div class="table-responsive">
				<h3>Detalle del Usuario</h3>
				<table class="table table-bordered">
					<tr>
						<td  class="warning text-center">Nombre:</td>
						<td class="text-center">{{Auth::user()->nombre . "" .Auth::user()->Apellido}}</td class="warning text-center">
					</tr>
					<tr>
						<td class="warning text-center">Usuario:</td>
						<td class="text-center">{{Auth::user()->usuario}}</td>
					</tr>
					<tr>
						<td class="warning text-center">Correo:</td>
						<td class="text-center">{{Auth::user()->email}}</td>
					</tr>
					<tr>
						<td class="warning text-center">Direccion:</td>
						<td class="text-center">{{Auth::user()->direccion}}</td>
					</tr>
				</table>
			</div>
			<div class="table-responsive">
			<table class="table table-bordered">
				<h3>Datos del pedido</h3>
				<tr>
					<th class="warning text-center">Producto</th>
					<th class="warning text-center">Precio</th>
					<th class="warning text-center">Cantidad</th>
					<th class="warning text-center">Subtotal</th>
				</tr>
				@foreach($cart as $item)
				<tr>
					<td class="text-center">{{$item->name}}</td>
					<td class="text-center">${{number_format($item->precio,2)}}</td>
					<td class="text-center">{{$item->cantidad}}</td>
					<td class="text-center">${{number_format($item->precio* $item->cantidad,2)}}</td>
				</tr>
				@endforeach
			</table><hr>
			<h3><span class="label label-success">Total: ${{number_format($total,2)}}</span></h3><hr>
			<p>
				<a href="{{route('cart-show')}}" class="btn btn-primary"><i class="fa fa-chevron-circle-left fa-2x"></i>  Regresar</a>
				<a href="{{route('cart-show')}}" class="btn btn-warning">Pagar con  <i class="fa fa-cc-paypal fa-2x"></i></a>
			</p>
			</div>
			</div>
		</div>
	</div>