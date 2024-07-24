<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Controllers\Controller;
use App\Models\Type;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("admin.project.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $types = Type::all();
        return view("admin.project.create", compact("types"));

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data=$request->validated();
        $project=new Project();
        $project->nome=$data['nome'];
        $project->repository=$data['repository'];
        
        $project->prezzo=$data['prezzo'];
        $project->descrizione=$data['descrizione'];
        $project->type_id=$data['type_id'];
        
        $project->save();

        return redirect()->route('admin.project.index')->with('message', 'creazione avvenuta con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("admin.project.show", compact("project"));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("admin.project.edit", compact("project"));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
         $data = $request->all();
        $project->update($data);

        return redirect()->route('admin.project.index')->with('message', 'Modifica avvenuta con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.project.index')->with('messagedelete', 'Eliminazione avvenuta con successo');
    }
}