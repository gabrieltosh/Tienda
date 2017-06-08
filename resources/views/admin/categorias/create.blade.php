@extends('admin.template')

@section('contenido')     
          	<!-- BASIC FORM ELELEMNTS -->

          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      {!!Form::open(['route'=>'panel.categoria.store','method'=>'POST','class'=>'form-horizontal style-form'])!!} 
                            @include('tienda.parcial.errors') 
                      <h3 class="text-center"><i class="fa fa-user"></i> Registro de Categoria</h3>
                        @include('admin.categorias.form')
                          <div class="form-group">       
                             <div class="col-sm-10">                
                                {!!Form::submit('Registrar',['class'=>'btn btn-theme btn-block'])!!}
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