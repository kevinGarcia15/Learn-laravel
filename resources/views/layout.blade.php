<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <style media="screen">
      .active{
        color:red;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    @include('partials/nav')<!--Incluimos el archivo nav-->
    @include('partials/_session-status')
    
    @yield('content')
  </body>
</html>
