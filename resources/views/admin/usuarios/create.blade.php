@extends('admin.template')

@section('contenido')         
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      {!!Form::open(['route'=>'panel.usuario.store','method'=>'POST','class'=>'form-horizontal style-form','files'=>true])!!} 
                      <h3 class="text-center"><i class="fa fa-user"></i> Registro de Usuarios</h3>
                          @include('admin.usuarios.form')
                          <div class="form-group">       
                             <div class="col-sm-10">                
                                {!!Form::submit('Registrar',['class'=>'btn btn-theme btn-block'])!!}
                               </div>
                          </div>
                           <div class="form-group">       
                             <div class="col-sm-10 center-block">                
                                <a href="{{route('home')}}" class="btn btn-primary btn-block " ><i class="fa fa-chevron-circle-left"></i> Regresar</a>
                               </div>
                          </div>
                       {!!Form::close()!!}
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->        
@stop 