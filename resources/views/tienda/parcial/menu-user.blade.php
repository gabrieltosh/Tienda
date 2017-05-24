@if(Auth::check())
 	<li><a href="{{route('logout')}}"><i class="fa fa-user"></i> {!!Auth::user()->nombre!!} Logout</a></li>
 @else
 	<li><a href="{{route('log.index')}}">Iniciar Session</a></li>
 @endif
