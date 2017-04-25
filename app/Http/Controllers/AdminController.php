<?php

namespace App\Http\Controllers;


use App\User;
use App\message;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Admin;
//use vendor\laravel\framework\src\Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\project;
use Illuminate\Support\Facades\Auth;




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
         $messages = message::all();
        return view('admin', ['students' => $students], ['messages'=>$messages]);
    }
     //public function viewadmins()
    //{

      //   $admin = Admin::all();
        //return view('alladmins', ['admin' => $admin]);
    //}
    
    public function getadmins(){


    $admin = Admin::all();
    return view('alladmins', ['admin' => $admin]);
       
    }
    
    public function createadmin(){
        return view('addadmin');
    }
    public function allprojects(){
        $projects = project::all();
        return view('allprojects',['projects'=>$projects]);
    }

    public function approv(){

         $students = User::all();

    return view('approvestudents', ['students' => $students]);        
    }

    public function updatestatus(Request $request){
        $id = Input::get('id');

        $student = User::find($id);

        $student->status = Input::get('status');
        $student->save();
        return redirect()->route('admin.dashboard');
    }



    public function registeradmin(Request $request){
        
        if(Auth::guard('admin')->check()){
            $admin = new Admin() ;
        $admin->name = Input::get('name');
        $admin->email = Input::get('email');
        $admin->password = sha1(Input::get('password'));
        $admin->save();
        
         return redirect()->route('admin.view');
        }
return view('admin');
        
    }
}
