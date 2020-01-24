<?php

namespace App\Http\Controllers;

use App\About;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $project = Project::where(['type' => 'main'])->get();
        $about = About::first();
        return view('projects.index', ['projects' => $project, 'abouts' => $about]);
    }

    public function index_side()
    {
        $project = Project::where(['type' => 'side'])->get();
        return view('projects.index', ['projects' => $project]);
    }

    public function index_me()
    {
        $about = About::first();
        return view('abouts.index', ['abouts' => $about]);
    }

    public function show($slug)
    {
        $project = Project::where(['slug' => $slug])->first();
        $step = $project->step;
        return view('projects.show', ['projects' => $project, 'steps' => $step]);
        // return view('projects.show');
    }
}
