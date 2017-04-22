<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
     /*
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'UWI_id' => 'min:7',
            'pic' => '' ,
            'degree' => 'required|min:3',
            'contact' => 'min:7', 
            'userName' => 'required|min:6',
        ]);
        
    }
        */
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
     /*
    protected function create(array $data)
    {
        
        return User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'UWI_id' => $data['UWI_id'],
            'pic' => $data['pic'],
            'degree' => $data['degree'],
            'contact' =>$data['contact'],
            'userName' => $data['username'],
        ]);
        
    }
    */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'lastname' => 'required|max:255',
            'UWI_id' => 'min:6|numeric',
            'contact' => 'nullable|min:7',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'lastname' => $data['lastname'],
            'password' => bcrypt($data['password']),
            'UWI_id' => $data['UWI_id'],
            'contact' => $data['contact'],
        ]);
    }
}
