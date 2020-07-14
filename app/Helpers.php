<?php
/*Esta funcion nos ayuda a activar o desactivar links de navegacion*/
function setActive($routeName)
{
  return request()->routeIs($routeName) ? 'active' : '';
}
