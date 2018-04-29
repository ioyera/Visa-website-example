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
    protected $redirectTo = '/home';

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|min:3|max:255',
            'lastname' => 'required|string|min:3|max:255',
            'nationality' => 'required|string|min:3|max:255',
            'gender' => 'required|string|min:3|max:255',
            'city' => 'required|string|min:3|max:255',
            'address' => 'required|string|min:3|max:255',
            // 'aip_id' => 'required|string|max:255',
            // 'person_id' =>'requierd|Integer|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|integer|min:3',
            'password' => 'required|string|min:6|confirmed',
            'type' => 'required|string',
            'number' => 'required|integer|min:3',
            'place' => 'required|string|min:3|max:255',
            
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
            'lastname' => $data['lastname'],
            'date' => $data['date'],
            'nationality' => $data['nationality'],
            'gender' => $data['gender'],
            'city' => $data['city'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
            'type' => $data['type'],
            'number' => $data['number'],
            'place' => $data['place'],
            'givendate' => $data['givendate'],
            
        ]);
        
    }
    public function edit($id){
        return view ('edit');
    }
}
