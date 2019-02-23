<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\AwaitedUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/dashboard';

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
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:6', 'confirmed'],

            'type_of_role'=>'required',
            'postalcode'=>'required|numeric|digits:6',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'address_line_3'=>'required',
            'address_line_2'=>'required',
            'address_line_1'=>'required',
            'alternative_contact_no'=>'required|numeric|digits:10|unique:awaited_user,alternative_contact_no',
            'contact_no'=>'required|numeric|digits:10|unique:awaited_user,contact_no',
            'email_id'=>'required|email|unique:awaited_user,email_id',
            'last_name'=>'required|alpha',
            'middle_name'=>'nullable|alpha',
            'first_name'=>'required|alpha',
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
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);

        $awaited_user = new AwaitedUser;

        $awaited_user->first_name=$request->input('first_name');
        $awaited_user->middle_name=$request->input('middle_name');
        $awaited_user->last_name=$request->input('last_name');
        $awaited_user->email_id=$request->input('email_id');
        $awaited_user->email_id=$request->input('password');
        $awaited_user->contact_no=$request->input('contact_no');
        $awaited_user->alternative_contact_no=$request->input('alternative_contact_no');
        $awaited_user->address_line_1=$request->input('address_line_1');
        $awaited_user->address_line_2=$request->input('address_line_2');
        $awaited_user->address_line_3=$request->input('address_line_3');
        $awaited_user->city=$request->input('city');
        $awaited_state->state=$request->input('state');
        $awaited_user->country=$request->input('country');
        $awaited_user->postal_code=$request->input('postal_code');
        $awaited_user->type_of_role=$request->input('type_of_role');
        $awaited_user->save();
        return "123";
        return redirect('/upload')->with('success', 'User Registered');
    }

    
}
