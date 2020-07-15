<nav>
  <ul>
    <li>
      <a class="{{setActive('home')}}" href="{{route('home')}}">Home</a>
    </li>
    <li>
      <a class="{{setActive('projectsResource.*')}}" href="{{route('projectsResource.index')}}">Portafolio Resource</a>
    </li>
    <li>
      <a class="{{setActive('contact')}}" href="{{route('contact')}}">Contactos</a>
    </li>
    @guest
    <li>
      <a href="{{route('login')}}">Login</a>
    </li>
  @else
    <li>
      <a
        href="#"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        Cerrar sesion
      </a>
    </li>
  @endguest
  </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
