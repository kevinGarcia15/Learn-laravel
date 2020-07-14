<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      $data = [
        ['title'=>'proyecto 1'],
        ['title'=>'proyecto 2'],
        ['title'=>'proyecto 3']
      ];
      return view('portafolio', compact('data'));
    }
}
