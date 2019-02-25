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

Route::post('/store', 'DashboardController@store');
Route::get('/upload', 'DashboardController@upload');
Route::get('/dashboard', 'DashboardController@index')->name('home');



//====================Storage====================

Route::get('/displayStorage', 'StorageController@displayStorage');
Route::get('/addStorage', 'StorageController@addStorage');
Route::post('/add', 'StorageController@add');
Route::get('/editStorage/{id}', 'StorageController@editStorage');

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

/*
using React
1)php artisan preset react
2)npm install
Refer link:https://blog.pusher.com/react-laravel-application/
https://medium.com/@chrislewisdev/react-without-npm-babel-or-webpack-1e9a6049714
*/














//====================/Storage====================

















