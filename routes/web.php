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

//rediection from about us page
Route::get('/about',function(){
return view('about');
//return redirect ("/");
});

//another way of routing
//Route::view('contact','contact');

//passing data with routing with route contraints
Route::get('/contact/{number}',function($number){
    return view('contact',["number"=>"$number"]);
})->where('number','[0-9]+');

//Routing for controllers
Route::get("users/{name}",[Users::class,'index']);
Route::get("users",[Users::class,'userAbout']);
Route::post("userform",[Users::class,'userForm']);