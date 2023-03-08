<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderby('updated_at', 'DESC')->get();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        return view('admin.projects.create', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_project = new Project();

        $new_project->fill($data);

        $new_project->save();

        return to_route('admin.projects.show', $new_project->id)->with('type', 'success')->with('Creazione progetto andata a buon fine');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        // update fa i metodi fill() e save() insieme
        // $project->update($data);
        $project->fill($data);
        $project->save();

        return to_route('admin.projects.show', $project->id)->with('type', 'success')->with('message', "Modifiche al progetto '$project->name' apportate con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // prendo il progetto e lo elimino
        $project->delete();

        // Faccio il redirect alla pagina index e stampo il messaggio di conferma eliinazione
        return to_route('admin.projects.index')->with('type', 'danger')->with('message', "Il progetto '$project->name' è stato cancellato con successo");
    }
}
