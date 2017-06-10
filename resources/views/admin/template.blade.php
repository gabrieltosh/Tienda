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
     <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-+ENW/yibaokMnme+vBLnHMphUYxHs34h9lpdbSLuAwGkOKFRl4C34WkjazBtb7eT" crossorigin="anonymous">
    <!--external css-->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js" ></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.0/jquery.nicescroll.min.js" ></script>
   <script src="{{asset('../admin/js/form-component.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="{{asset('../admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>


    
    <!--common script for all pages-->
    <script src="{{asset('../admin/js/common-scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>
    <!--script for this page-->
    <script src="{{asset('../admin/js/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/zabuto_calendar/1.2.1/zabuto_calendar.min.js"></script>
        <script src="{{asset('../admin/js/main.js')}}"></script>
  </body>
</html>
