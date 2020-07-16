<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectsResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *Listar recursos en index
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $projects = Project::orderBy('created_at', 'DESC')->paginate(5);
  //    $projects2 = Project::orderBy('created_at', 'DESC')->paginate(1);
      return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *Formulario para crear un nuevo recursos
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', [
          'project' => new Project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *Guarda los valores en BD enviados por create
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
       Project::create($request->validated());
       //nombre de la ruta
      return redirect()->route('projectsResource.index')->with('status','El proyecto fue creado exitosamente');
    }

    /**
     * Display the specified resource.
     *Mostrar un elemento en especifico por su id
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('projects.show', [
          'findProjectId' => Project::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * Mostrar un formulario para editar un elemento
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('projects.edit', [
        'project' => Project::findOrFail($id)
      ]);
    }

    /**
     * Update the specified resource in storage.
     * Guardar los valores provistos por el metodo edit
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $projectsResource, SaveProjectRequest $request)
    {
      $projectsResource->update($request->validated());

      return redirect()->route('projectsResource.show', $projectsResource)->with('status','El proyecto fue actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *Eliminar un recurso por su ID
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $projectsResource)
    {
        $projectsResource->delete();
        return redirect()->route('projectsResource.index')->with('status','El proyecto fue Eliminado exitosamente');//nombre de la ruta

    }
}
