<?php

use App\Http\Controllers\ManagementUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\backend\PengalamanKerjaController;
//use Illuminate\Contracts\Container\BindingResolutionException;

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

Route::get('/', function () {
  return view('welcome');
});

Route::group(['namespace' => 'Backend'], function()
  {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
  });




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

  

  //Route::group(['namespace' => 'frontend'], function()
  //{
    //Route::resource('login', 'LoginController');
  //});




//Route::get('/error', function () {
  //return view('error');
//})->name('error');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//->middleware('roleAdmin');
//Route::get('admin/profile', function(){
    //
//})->middleware(CheckAge::class);
    
//Route::get('admin/profile', function(){
    //
//})->middleware('auth');

//Route::get('/', function(){
    //
//})->middleware('first', 'second');

//Route::get('/', function(){
  //
//})->middleware('web');

//Route::group(['middleware' => ['web']], function(){
      //
//});

//Route::middleware(['web', 'subscribed'])->group(function(){
    //
//});

//Route::put('post/{id}', function ($id) {
  //
//})->middleware('role:editor');
?>

