<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>@yield('title')</title>
  </head>
  <body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
      <header>
        @include('partials/nav')<!--Incluimos el archivo nav-->
        @include('partials/_session-status')
      </header>

      <main class="py-4">
        @yield('content')
      </main>

      <footer>
        {{config('app.name')}} | Copyright @ {{date('Y')}}
      </footer>
    </div>
  </body>
</html>
