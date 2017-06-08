<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Panel de Administracion</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('../admin/css/bootstrap.css')}}">
    <!--external css-->
    <link rel="stylesheet" href="{{asset('../admin/font-awesome/css/font-awesome.css')}}">
    <!-- Custom styles for this template 
    <link rel="stylesheet" type="text/css" href="{{asset('../admin/js/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('../admin/js/bootstrap-daterangepicker/daterangepicker.css')}}" />-->
     <link rel="stylesheet" href="{{asset('../admin/css/style.css')}}">
     <link rel="stylesheet" href="{{asset('../admin/css/zabuto_calendar.css')}}">
     <link rel="stylesheet" href="{{asset('../admin/css/style-responsive.css')}}">
      <link rel="stylesheet" href="{{asset('../admin/js/gritter/css/jquery.gritter.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      
      <!--header start-->
      @include('admin.parcial.nav')
      <!--header end-->
      <!--sidebar start-->
      <aside>
          @include('admin.parcial.menu')
      </aside>
      <!--sidebar end-->
      <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                       
            	@yield('contenido')
  			
  		    </section>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          @include('admin.parcial.footer')
      </footer>
      <!--footer end-->
  </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('../admin/js/jquery.js')}}"></script>
    <script src="{{asset('../admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('../admin/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <script src="{{asset('../admin/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('../admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('../admin/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('../admin/js/jquery.nicescroll.js')}}"></script>


    <!--common script for all pages-->
    <script src="{{asset('../admin/js/common-scripts.js')}}"></script>
    <script src="{{asset('../admin/js/bootstrap-switch.js')}}"></script>
    <script src="{{asset('../admin/js/jquery.tagsinput.js')}}"></script>
    <!--script for this page-->
    <script src="{{asset('../admin/js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('../admin/js/bootstrap-daterangepicker/date.js')}}"></script>       <script src="{{asset('../admin/js/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
      <script src="{{asset('../admin/js/form-component.js')}}"></script>
        <script src="{{asset('../admin/js/zabuto_calendar.js')}}"></script>
  </body>
</html>
