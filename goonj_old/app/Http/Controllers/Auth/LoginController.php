<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Users;
use App\AwaitedUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Illuminate\Foundation\Auth\RedirectsUsers;
// use App\Http\Middleware\RedirectIfAuthenticated;
// use Illuminate\Auth\Middleware\Authenticate as Middleware;
// use App\Http\Middleware\Authenticate;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    public $table_name="";

    // protected function attemptLogin(Request $request)
    // {   $exist=false;
    //     // $table_name="";
    //     $pass = $request->password;
    //     if (Auth::guard('users')->attempt(['email' => $request->email, 'password' => $pass])) {
    //         $details = Auth::guard('users')->user();
    //         $user = $details['original'];
    //         $exist=true;
    //         $table_name = 'users';
    //         $GLOBALS['table_name']='users';
    //         session(['table' => 'users']);
    //         // $table_name='users';
    //     }
    //     if (Auth::guard('awaited_user')->attempt(['email' => $request->email, 'password' => $pass])) {
    //         $details = Auth::guard('awaited_user')->user();
    //         $user = $details['original'];
    //         $exist=true;
    //         $table_name = 'awaited_user';
    //         $GLOBALS['table_name']='awaited_user';
    //         session(['table' => 'awaited_user']);
    //         // $table_name='awaited_user';
    //     }
    //     if($exist)
    //     {
    //         return Auth::guard($GLOBALS['table_name'])->attempt(
    //             ['email' => $request->email, 'password' => $pass]
    //         );
    //     }
    // }

    // protected function sendLoginResponse(Request $request)
    // {
    //     $request->session()->regenerate();

    //     $this->clearLoginAttempts($request);
    //     // return view('test')->with('data',Auth::guard($GLOBALS['table_name'])->user());
    //     return redirect()->intended($this->redirectPath());
    // }
    // public function redirectPath()
    // {    
    //      // $email = Auth()->user()->email;
    //     // return view('test')->with('data',$request);
    //     // return view('test')->with('data',Auth::guard($GLOBALS['table_name'])->user());
    //     $email=Auth::guard($GLOBALS['table_name'])->user()->email;
    //     $user = Users::where('email', $email)->first();
    //     $awaiteduser = AwaitedUser::where('email', $email)->first();
    //     if ($user!=null) {
    //         // return view('test')->with('data',Auth::guard($GLOBALS['table_name'])->user());
            
    //         return redirect('admin/home')->with('success', 'Login Successful');
    //     }
    //     else if($awaiteduser!=null){
            
    //         // return view('test')->with('data',Auth::guard($GLOBALS['table_name'])->user());
    //         return redirect('/dashboard')->with('success', 'Login Successful');
            
    //         // if ($awaiteduser != NULL) {
    //         //     if($awaiteduser->status == NULL){
    //         //         return '/upload';
    //         //     }
    //         //     else if($awaiteduser->status != NULL){
    //         //         return '/dashboard';
    //         //     }
    //         //     return '/dashboard';
    //         // }
    //     }
    //     else{
    //         return redirect('/login')->with('error', 'Login failed');
    //     }
    // }
    // public function logout(Request $request)
    // {
    //     Auth::guard($GLOBALS['table_name'])->logout();

    //     $request->session()->invalidate();

    //     return $this->loggedOut($request) ?: redirect('/login');
    // }
    
    // public function redirectTo(Request $request)
    // {
    //     // $email = Auth()->user()->email;
    //     // return view('test')->with('data',$request);
    //     // return view('test')->with('data',Auth::guard($GLOBALS['table_name'])->user());
    //     $email=Auth::guard($GLOBALS['table_name'])->user()->email;
    //     $user = Users::where('email', $email)->first();
    //     $awaiteduser = AwaitedUser::where('email', $email)->first();
    //     if ($user!=null) {
    //         // return view('test')->with('data',Auth::guard($GLOBALS['table_name'])->user());
    //         return redirect('admin/home')->with('success', 'Login Successful');
    //     }
    //     else if($awaiteduser!=null){
    //         // return view('test')->with('data',Auth::guard($GLOBALS['table_name'])->user());
    //         return redirect('/dashboard')->with('success', 'Login Successful');
            
    //         // if ($awaiteduser != NULL) {
    //         //     if($awaiteduser->status == NULL){
    //         //         return '/upload';
    //         //     }
    //         //     else if($awaiteduser->status != NULL){
    //         //         return '/dashboard';
    //         //     }
    //         //     return '/dashboard';
    //         // }
    //     }
    //     else{
    //         return redirect('/login')->with('error', 'Login failed');
    //     }
    // }

// protected function authenticated(Request $request, $user)
//     {
//         return 'dashboard';
//         // if(session('table')=='users') {
//         //     return redirect()->intended('/dashboard');
//         // } 
//         // if(session('table')=='awaitedusers') {
//         //     return redirect()->intended('/dashboard');
//         // } 


//         // return view('test')->with('data',$user->role());

//         // if($user->hasRole('Admin')) {
//         //     return redirect()->intended('admin');
//         // } 

//         // if ($user->hasRole('PrivilegedMember')) {
//         //     return redirect()->intended('PriviligedMember/index');
//         // }
//     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // protected function guard()
    // {
    //     if(session('table')=='users'){
    //         return Auth::guard('users');
    //     }
        
    //     else if(session('table')=='awaited_user'){
    //         return Auth::guard('awaited_user');
    //     }
    // }

    public function __construct()
    {
    //     $this->middleware(function($request,$next)
    //    {
    //        $table_name="";
    //     LoginController::attemptLogin($request);
    //     LoginController::sendLoginResponse($request);
    //     LoginController::overridenredirectTo($request);
    //        return LoginController::overridenredirectTo($request);

    //    });
        $this->middleware('guest')->except('logout');
    }
}
