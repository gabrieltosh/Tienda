          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">            
              	  <p class="centered">
                      <a href="profile.html">
                          <img src="http://slipkorn.files.wordpress.com/2007/07/avatar-south-park.jpg" class="img-circle" width="60">
                      </a>
                  </p>
              	  <h5 class="centered">{!!Auth::user()->nombre!!} {!!Auth::user()->apellido!!}</h5>
              	  	
                  <li class="mt">
                      <a href="{{route('panel.index')}}">
                          <i class="fa fa-indent"></i>
                          <span>Inicio</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Usuarios</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('panel.usuario.index')}}">Mostrar Usuarios</a></li>
                          <li><a  href="{{route('panel.usuario.create')}}">Añadir Usuario</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Productos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Mostrar Productos</a></li>
                          <li><a  href="gallery.html">Añadir Producto</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Categorias</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{route('panel.categoria.index')}}">Mostrar Categorias</a></li>
                          <li><a  href="login.html">Añadir Categoria</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Pedidos</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Mostrar Pedidos</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>