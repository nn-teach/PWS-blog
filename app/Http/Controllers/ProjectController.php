<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;
use App\Events\ProjectCreated;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        //
        // $project = new Project(); //on instancie un nouveau projet
        // $project->title = request('title'); //on set le titre avec la donnée envoyée du formulaire
        // $project->description = request('description');
        // $project->save(); // on enregistre dans la base
        request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required'
        ]);

        $project = Project::create(array_merge(
            array('user_id'=>1),
            request(['title', 'description'])
        ));
        
        ProjectCreated::dispatch($project);
        
        // Mail::raw('Projet créé', function ($message) {
        //     $message->to('admin@monsite.com')
        //         ->subject('Un nouveau projet');
        // });
        
        //return redirect('/project'); // méthode pour rediriger vers une autre url (en get par défaut)
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        // $project = Project::find($id); // plus besoin le projet est déjà instancié
        return view('project.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        return view('project.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
        $project->title = request('title');
        $project->description = request('description');
        $project->save;
        return redirect('/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect('/project');
    }
}
