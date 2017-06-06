<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Inicio de Session</title>

    <!--external css-->   
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('../admin/css/bootstrap.css')}}">
    <!--external css-->
    <link rel="stylesheet" href="{{asset('../admin/font-awesome/css/font-awesome.css')}}">
    <!-- Custom styles for this template -->
     <link rel="stylesheet" href="{{asset('../admin/css/style.css')}}">

     <link rel="stylesheet" href="{{asset('../admin/css/style-responsive.css')}}">
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	  {!!Form::open(['route'=>'panel.login.store','method'=>'POST','class'=>'form-login'])!!}    
	  	      
		        <h2 class="form-login-heading">Inicio de Sesion</h2>
		        <div class="login-wrap">
		        	@include('tienda.parcial.errors') 
            		@include('alerts.errors')
		            <input type="email"  name="email" class="form-control" placeholder="Ingrese su Correo" value="{{ old('email') }}">
		            <br>
		            <input type="password" class="form-control" placeholder="Ingrese su Contraseña" name="password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Olvido su Contraseña?</a>
		
		                </span>
		            </label>
		            {!!Form::submit('Iniciar',['class'=>'btn btn-theme btn-block'])!!}
		        </div>
		 {!!Form::close()!!}   
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Olvido su Contraseña ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Ingrese su Correo para restaurar su cuenta.</p>
		                          <input type="text" name="email" placeholder="Ingrese su Correo" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
		                          <button class="btn btn-theme" type="button">Enviar</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		          	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->

	<script src="{{asset('../admin/js/jquery.js')}}"></script>
    <script src="{{asset('../admin/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('../admin/js/jquery.backstretch.min.js')}}"></script>
    <!--BACKSTRETCH-->
    <script>
        $.backstretch("../admin/img/fondoLogin.png", {speed: 500});
    </script>

  </body>
</html>
