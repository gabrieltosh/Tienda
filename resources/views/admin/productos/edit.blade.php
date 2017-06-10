@extends('admin.template')

@section('contenido')     
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      {!!Form::model($producto, ['route' => ['panel.producto.update', $producto->slug],'class'=>'form-horizontal style-form','method'=>'PUT','files'=>true])!!}
                            @include('tienda.parcial.errors') 
                      <h3 class="text-center"><i class="fa fa-user"></i> Edicion de Producto</h3>
                        @include('admin.productos.form')
                          <div class="form-group">       
                             <div class="col-sm-10">               
                                {!!Form::submit('Actualizar',['class'=>'btn btn-theme btn-block'])!!}
                               </div>
                          </div>
                           <div class="form-group">       
                             <div class="col-sm-10 center-block">                
                                <a href="{{route('panel.index')}}" class="btn btn-primary btn-block " ><i class="fa fa-chevron-circle-left"></i> Regresar</a>
                               </div>
                          </div>
                       {!!Form::close()!!}
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
           
@stop 