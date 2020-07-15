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
  </ul>
</nav>
