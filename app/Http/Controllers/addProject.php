<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Project;
use Illuminate\Support\Facades\Input;

class addProject extends Controller
{
    public function store(Request $request){
        $project = new Project;
        $project->projectName = Input::get("pname");
        $project->courseCode = Input::get("coursecode");
        $project->coursename = Input::get("coursename");
        $project->year = Input::get("year");
        $project->degree = Input::get("degree");
        $project->github = Input::get("github");
        $project->groupMembers = Input::get("emails");
        $project->upload = Input::get("upload");
        $project->description = Input::get("description");
        $project->save();
    }

    public function show(){
        return view('addProject');
    }

}
