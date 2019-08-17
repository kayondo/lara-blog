<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $projects = Project::where('owner_id', auth()->id())->get();

        return view('projects.index', compact('projects'));
    }

    // this loads the create view
    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        // dd(auth()->id());
        // this is backside validation
        $attributes = request()->validate([
            'title' => ['required','min:3', 'max:255'],
            'description' => ['required','min:5']
        ]);

        $attributes['owner_id']  = auth()->id();
        // $attributes['owner_id'] = auth()->id();
        // dd($attributes);
        Project::create($attributes);


    // this redirects to the /projects endpoint.
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
           
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');

    }
}
