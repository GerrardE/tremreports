<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\profile;
use Storage;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

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

    //Handles registration request for seller
    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $user = $this->create($request->all());

        //Authenticates seller
       $credentials = $request->only('email', 'password');

        if (($credentials)) {
            // Authentication passed...
			
			Session::flash('success', 'Account was created successfully.');
	        return redirect()->back();
        }
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/cuser';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
	
        return Validator::make($data, [
           'name' => 'required|string|max:255',
		   'username' => 'required|string|max:255',
		   'role' => 'required',
		   'branch' => 'required',
           'email' => 'required|string|email|max:255|unique:users',
		   'mobile' => 'required|string|max:11|unique:users',
           'password' => 'required|string|min:6|confirmed',
			
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
		
        $user= User::create([
            'name' => $data['name'],
			'username' => $data['username'],
			'role' => $data['role'],
            'email' => $data['email'],
			'mobile' => $data['mobile'],
			'branch' => $data['branch'],
            'password' => bcrypt($data['password']),
        ]);
		
		
		return $user;
    }
}