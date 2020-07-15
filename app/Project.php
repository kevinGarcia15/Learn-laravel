<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  //para ingresar datos masivamente
  protected $fillable = ['title','description'];

  public function getRouterKeyName(){
    return 'url';
  }
    //
}
