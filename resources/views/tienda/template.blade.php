<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tienda Laravel')</title>
   <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
   <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Ravi+Prakash" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    @include('tienda.parcial.nav')
    @yield('contenido')
    @include('tienda.parcial.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
    <script src="{{asset('js/pinterest_grid.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>