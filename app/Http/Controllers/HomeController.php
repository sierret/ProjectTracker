<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use App\Course;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Admin;
use App\User;
//use vendor\laravel\framework\src\Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $projects = project::all();
        $courses = Course::all();
        $users = User::all();
        $projview = " ";
        $data = array('projects' =>$projects,'users' => $users,'courses' =>$courses );
        return view('index', ['data' =>$data], ['projview'=>$projview] );
    }
    
}
