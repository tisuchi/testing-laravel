<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectPost;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::get();

        return view('projects.index', compact('projects'));
    }

    public function store(StoreProjectPost $request)
    {
        $validated = $request->validated();

        if (!$validated){
            return request()->session()->all();
        }

        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }
}
