<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

//=====================<Login>=============================
// Route::get('/register','MyLoginController@register');
// Route::post('/registerSave','MyLoginController@registerSave');
// Route::get('upload','MyLoginController@upload');
// Route::get('saveDoc','MyLoginController@saveDoc');

// Route::get('/login','MyLoginController@login')->name('login');
// Route::post('/loginCheck','MyLoginController@loginCheck');

//======================</Login>============================



//====================<Register new user>====================
Route::post('/store', 'DashboardController@store');
Route::get('/upload', 'DashboardController@upload');
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//====================</Register new user>====================

//====================</Register new user>====================
Route::get('redirect', 'RedirectController@index');
//===========================================================//



//======================<Admin Office>=================
Route::get('/admin/home', 'AdminOfficeController@home');
Route::get('/admin/approve', 'AdminOfficeController@approve');
Route::get('/admin/onsite', 'AdminOfficeController@onsite');
Route::get('/admin/storagecentre', 'AdminOfficeController@storagecentre');
Route::get('/admin/setUpReliefCentre', 'AdminOfficeController@setUpReliefCentre');
Route::get('/admin/disaster', 'AdminOfficeController@disaster');
Route::get('/admin/approve/{id}', 'AdminOfficeController@show');
Route::post('/accept', 'AdminOfficeController@accept');
Route::post('/reject', 'AdminOfficeController@reject');

Route::get('/viewQuotation', 'AdminOfficeController@viewQuotation');


//======================</Admin Office>=================

//====================<Storage>====================

Route::get('/displayStorage', 'StorageController@displayStorage');
Route::get('/addStorage', 'StorageController@addStorage');
Route::post('/add', 'StorageController@add');
Route::get('/editStorage/{id}', 'StorageController@editStorage');
Route::post('/edit/{id}', 'StorageController@edit');
Route::get('/uploadExcel', 'StorageController@importExcel');

/*
=>for storing json files in folder(storage/app/reliefCentre)
1) go to config/filesystems.php 
2) paste following code 

'reliefCentre' => [
            'driver' => 'local',
            'root' => storage_path('app/reliefCentre'),
        ],

Storage::disk('local')->put('file.txt', 'Contents');
$contents = Storage::disk('local')->get('file.jpg');

refer link:https://laravel.com/docs/5.2/filesystem
*/

//====================/Storage====================


//====================React====================

/*
using React
1)php artisan preset react
2)install Node.js     link:https://nodejs.org/en/
3)npm install
4)npm run
Refer link:https://blog.pusher.com/react-laravel-application/
https://medium.com/@chrislewisdev/react-without-npm-babel-or-webpack-1e9a6049714
*/
//====================/React====================




//====================<Ajax>====================
Route::get('ajax',function() {
    return view('message');
 });
 Route::get('/getmsg','AjaxController@index')->name('getmsg');
//====================</Ajax>====================










