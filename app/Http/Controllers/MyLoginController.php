<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\AwaitedUser;
use Illuminate\Support\Facades\Hash;


class MyLoginController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerSave(Request $request)
    {
        $this->validate($request, [
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:6', 'confirmed'],

            // 'postalcode'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            'address_line_3'=>'required',
            'address_line_2'=>'required',
            'address_line_1'=>'required',
            'alternative_contact_no'=>'nullable|numeric|digits:10|unique:awaited_user,alternative_contact_no',
            'contact_no'=>'required|numeric|digits:10|unique:awaited_user,contact_no',
            'email'=>'required|email|string|max:255|unique:awaited_user,email',
            'password' => 'required|string|min:6|confirmed',
            'last_name'=>'required|alpha',
            'middle_name'=>'nullable|alpha',
            'first_name'=>'required|alpha',
        ]);
            // return "dsfsdf";
        $pass=Hash::make($request->input('password'));

        $awaited_user = new AwaitedUser;
        
        $awaited_user->first_name=$request->input('first_name');
        $awaited_user->middle_name=$request->input('middle_name');
        $awaited_user->last_name=$request->input('last_name');
        $awaited_user->email=$request->input('email');
        $awaited_user->password=$pass;
        $awaited_user->contact_no=$request->input('contact_no');
        $awaited_user->alternative_contact_no=$request->input('alternative_contact_no');
        $awaited_user->address_line_1=$request->input('address_line_1');
        $awaited_user->address_line_2=$request->input('address_line_2');
        $awaited_user->address_line_3=$request->input('address_line_3');
        $awaited_user->city=$request->input('city');
        $awaited_user->state=$request->input('state');
        $awaited_user->country=$request->input('country');
        $awaited_user->postal_code=$request->input('postal_code');
        $awaited_user->type_of_role=$request->input('type_of_role');
        $awaited_user->save();
        // return "123";
        return redirect('/dashboard')->with('success', 'User Registered');
    }

    // public function upload()
    // {
    //     return view('auth.upload');
    // }
    public function login()
    {
        return view('auth.login');
    }
    public function loginCheck(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|string',
            'password' => 'required|string',
        ]);
        // $pass=Hash::make($request->password);
        $user=Users::where('email',$request->email)->first();

        if($user!=null){
            // if($user->password==$pass){
            if ( Hash::check($request->password, $user->password) ) {
                return redirect('/dashboard')->with('success', 'User logged in');
            }
            else{
                return redirect('/login')->with('error', 'Login failed');
            }
        }
        else{
            $awaiteduser=AwaitedUser::where('email',$request->email)->first();
            // return (string)Hash::check('123456', '$2y$10$53.cFziN9ufB3ooKNKP.E.rtEaq1lZlpaiIVWGVVenZVpDV.E/ShO');
            // return Hash::make($request->password).'\\\\\\\\'.$awaiteduser->password.'\\\\\\\\\\\\'.Hash::check(Hash::make($request->password), $awaiteduser->password);
            if($awaiteduser!=null){
                // return 123;
                // if($awaiteduser->password==$pass){
                if ( Hash::check($request->password, $awaiteduser->password) ) {
                    // return 234;
                    if($awaiteduser->status == null){
                        // return 345;
                        return redirect('/upload')->with('success', 'Login Successful');
                    }
                    else{
                        // return 456;
                        return redirect('/dashboard')->with('success', 'Login Successful');
                    }
                }
                else{
                    return redirect('/login')->with('error', 'Login failed');
                }
            }
            
        }
        // return redirect('/dashboard')->with('success', 'User Registered');
    }




}
