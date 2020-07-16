<nav class="navbar bg-white shadow-sm">
  <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a
        class="nav-link {{setActive('home')}}"
        href="{{route('home')}}">
        Home
      </a>
    </li>
    <li  class="nav-item">
      <a
        class="nav-link {{setActive('projectsResource.*')}}"
        href="{{route('projectsResource.index')}}">
        Portafolio Resource
      </a>
    </li>
    <li  class="nav-item">
      <a
        class="nav-link {{setActive('contact')}}"
        href="{{route('contact')}}">
        Contactos
      </a>
    </li>
    @guest
    <li class="nav-item">
      <a class="nav-link {{setActive('login')}}"href="{{route('login')}}">Login</a>
    </li>
  @else
    <li class="nav-item">
      <a
        class="nav-link"
        href="#"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        Cerrar sesion
      </a>
    </li>
  @endguest
  </ul>
</nav>
<form
  id="logout-form"
  action="{{ route('logout') }}"
  method="POST"
  style="display: none;">
    @csrf
</form>
