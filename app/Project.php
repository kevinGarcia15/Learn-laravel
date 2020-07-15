<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  //para ingresar datos masivamente
  protected $guarded = [];//deshabilitamos el filable cuando es un array vacio

  public function getRouterKeyName(){
    return 'url';
  }
    //
}
