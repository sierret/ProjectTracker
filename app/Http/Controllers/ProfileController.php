<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Admin;
//use vendor\laravel\framework\src\Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('profile', ['users' => $users]);
    }

    public function update(Request $request){
        $id = Input::get('id');

        $student = User::find($id);

        $student->firstname = Input::get('firstname');
        $student->lastname = Input::get('lastname');
        $student->email = Input::get('email');
        $student->contact = Input::get('contact');
        
        $student->save();
        return view('index');
    }
}
