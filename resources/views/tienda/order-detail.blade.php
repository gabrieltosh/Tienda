@extends('tienda.template')
@section('contenido')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart">Detalle Pedido</i></h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<h3>Detalle del Usuario</h3>
				<table class="table table-striped table hover table-bordered">
					<tr>
						<td>Nombre:</td>
						<td>{{Auth::user()->nombre . "" .Auth::user()->Apellido}}</td>
					</tr>
					<tr>
						<td>Usuario:</td>
						<td>{{Auth::user()->usuario}}</td>
					</tr>
					<tr>
						<td>Correo:</td>
						<td>{{Auth::user()->email}}</td>
					</tr>
					<tr>
						<td>Direccion:</td>
						<td>{{Auth::user()->direccion}}</td>
					</tr>
				</table>
			</div>
			<div class="table-responsive">
			<table class="table table-striped table hover table-bordered">
				<h3>Datos del pedido</h3>
				<tr>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Subtotal</th>
				</tr>
				@foreach($cart as $item)
				<tr>
					<td>{{$item->name}}</td>
					<td>${{number_format($item->precio,2)}}</td>
					<td>{{$item->cantidad}}</td>
					<td>${{number_format($item->precio* $item->cantidad,2)}}</td>
				</tr>
				@endforeach
			</table><hr>
			<h3><span class="label label-success">Total: ${{number_format($total,2)}}</span></h3><hr>
			<p>
				<a href="{{route('cart-show')}}" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i>Regresar</a>
				<a href="{{route('cart-show')}}" class="btn btn-warning">Pagar con  <i class="fa fa-paypal fa-2x"></i></a>
			</p>
			</div>
		</div>
	</div>