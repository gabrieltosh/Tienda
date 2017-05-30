<header>

   <nav>
      <ul class="menu">
        <li class="current"><a href="{{route('home')}}">Inicio</a></li>
        <li><a href="about.html">Conocenos</a></li>
        <li><a href="services.html">Contactanos</a></li>
        <li><a href="{{route('cart-show')}}"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
         @include('tienda.parcial.menu-user')
      </ul>
    </nav>
</nav>

</header>
