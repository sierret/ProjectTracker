<?php

namespace App\Http\Controllers;

use vendor\laravel\framework\src\Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $students = User::all();
        return view('admin', ['students' => $students]);
    }
}
