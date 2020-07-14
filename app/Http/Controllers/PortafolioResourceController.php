<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *Listar recursos en index
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = [
        ['title'=>'proyecto 1'],
        ['title'=>'proyecto 2'],
        ['title'=>'proyecto 3'],
        ['title'=>'proyecto 4']
      ];
      return view('portafolio', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *Formulario para crear un nuevo recursos
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *Guarda los valores en BD enviados por create
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *Mostrar un elemento en especifico por su id
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Mostrar un formulario para editar un elemento
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Guardar los valores provistos por el metodo edit
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *Eliminar un recurso por su ID
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
