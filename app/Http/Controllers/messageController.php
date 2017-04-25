<?php

namespace App\Http\Controllers;

use vendor\laravel\framework\src\Illuminate\Http\Request;
use App\message;
use Illuminate\Support\Facades\Input;

class messageController extends Controller
{
    
    public function index()
    {

         $message = new message;
         $message->name = Input::get("name");
         $message->country = Input::get("country");
         $message->message = Input::get("message");
         $message->email = Input::get("email");
         $message->save();
         
         return redirect('/');
    }
}
    