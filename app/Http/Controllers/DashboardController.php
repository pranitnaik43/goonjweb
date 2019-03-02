<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\AwaitedUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class DashboardController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function maindashboard()
    {
        return view('layouts.maindashboard');
    }
    public function index()
    {
        $id=auth()->user()->email;
        // return $id;
        $awaitedUser=AwaitedUser::where('email',$id)->get();
        // return $awaitedUser;
        return view('dashboard')->with('data',$awaitedUser);
        return view('dashboard');
    }
    // public function store(Request $request)
    // {
    //     $this->validate($request, [

    //         'type_of_role'=>'required',
    //         'postalcode'=>'required|numeric|digits:6',
    //         'country'=>'required',
    //         'state'=>'required',
    //         'city'=>'required',
    //         'address_line_3'=>'required',
    //         'address_line_2'=>'required',
    //         'address_line_1'=>'required',
    //         'alternative_contact_no'=>'required|numeric|digits:10|unique:awaited_user,alternative_contact_no',
    //         'contact_no'=>'required|numeric|digits:10|unique:awaited_user,contact_no',
    //         'email'=>'required|email|unique:awaited_user,email',
    //         'last_name'=>'required|alpha',
    //         'middle_name'=>'nullable|alpha',
    //         'first_name'=>'required|alpha',
    //     ]);

    //     $awaited_user = new AwaitedUser;

    //     $awaited_user->first_name=$request->input('first_name');
    //     $awaited_user->middle_name=$request->input('middle_name');
    //     $awaited_user->last_name=$request->input('last_name');
    //     $awaited_user->email=$request->input('email');
    //     $awaited_user->password=$request->input('password');
    //     $awaited_user->contact_no=$request->input('contact_no');
    //     $awaited_user->alternative_contact_no=$request->input('alternative_contact_no');
    //     $awaited_user->address_line_1=$request->input('address_line_1');
    //     $awaited_user->address_line_2=$request->input('address_line_2');
    //     $awaited_user->address_line_3=$request->input('address_line_3');
    //     $awaited_user->city=$request->input('city');
    //     $awaited_state->state=$request->input('state');
    //     $awaited_user->country=$request->input('country');
    //     $awaited_user->postal_code=$request->input('postal_code');
    //     $awaited_user->type_of_role=$request->input('type_of_role');
    //     $awaited_user->save();
    //     return "123";
    //     return redirect('/upload')->with('success', 'User Registered');
    // }


    public function upload()
    {
        return view('auth.upload');
    }
}
