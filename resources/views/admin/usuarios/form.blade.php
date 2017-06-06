@extends('admin.template')

@section('contenido')

            
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      {!!Form::open(['route'=>'panel.usuario.store','method'=>'POST','class'=>'form-horizontal style-form'])!!} 
                      <h3 class="text-center"><i class="fa fa-user"></i> Registro de Usuarios</h3>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nombre</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="nombre">
                                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Apellido</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="apellido">
                                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Correo</label>
                              <div class="col-sm-10">
                                  <input type="email" name="email" class="form-control round-form">
                                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Usuario</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="usuario">
                                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contraseña</label>
                              <div class="col-sm-10">
                                  <input type="password"  class="form-control round-form" placeholder="">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" >Direccion</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control round-form" name="direccion">
                                   <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
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