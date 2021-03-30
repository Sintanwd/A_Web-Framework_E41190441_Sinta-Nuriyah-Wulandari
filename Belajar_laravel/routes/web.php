<?php

//use App\Http\Controllers\ManagementUserController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

//Route::get('/', function () {
    //return view('welcome');
//});

//Route::get('/home', function () {
  //return view('frontend.home');
//});

//Route::get('/user', [ManagementUserController::class,'index']);
//Route::get('/create', [ManagementUserController::class,'create']);
//Route::get('/user/1/edit', [ManagementUserController::class,'edit']);

//Route::get("/home", function(){
//return view("home");
//})

//Route::get("/user", function(){
  //return view("user");
  //})

  //Route::get('/', function () {
    //return view('backend.dashboard');
  //});

  //Route::group(['namespace' => 'frontend'], function()
  //{
    //Route::resource('home', 'HomeController');
  //});

  Route::group(['namespace' => 'backend'], function()
  {
    Route::resource('dashboard', 'DashboardController');
  });
?>