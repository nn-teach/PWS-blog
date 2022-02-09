<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::all();
        return view('project.index', ['projects' => $projects]);
    }
    public function create()
    {
        return view('project.create');
    }
    public function store()
    {
        return request()->all(); //pour récupérer les informations du formulaire
    }
}
