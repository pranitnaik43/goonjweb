<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;  
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function index()
    {
        // $email = Auth()->user()->email;
        Auth::guard('users')->user()->email;
        return $email;  
        return view("redirect.blade")->with('email',$email);
    }
}
