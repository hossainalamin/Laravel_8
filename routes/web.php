<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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
Route::get('/login',function(){
    return view('userform');
});
Route::view("noaccess","noaccess");

//rediection from  page
Route::get('/contact',function(){
return view('contact');
//return redirect ("/");
});

//another way of routing
//Route::view('contact','contact');

//passing data with routing with route contraints
Route::get('/contact/{number}',function($number){
    return view ('contact',["number"=>"$number"]);
})->where('number','[0-9]+');

//Routing for controllers
Route::get("users/{name}",[Users::class,'index']);
Route::get("users",[Users::class,'userAbout']);
Route::post("userform",[Users::class,'userForm']);

//route for middleware
Route::group(['middleware'=>['protectedpage']],function(){
    Route::get('/contact',function(){
        return view('contact');
        //return redirect ("/");
        });
});