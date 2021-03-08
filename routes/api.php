<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users',function(){
return "Hi users";
});

//required parameter
Route::get("/username/{name}",function($name){
    return "Hi ".$name;
});

//option parameter
Route::get("/usernumber/{number?}",function($number=null){
return "Phone : ".$number;
});

//Local Route constrains
Route::get("/userid/{id?}",function($id = null){
    return "Id id : ".$id;
})->where('id','[0-9]+');

//global constrains
Route::get('/info/{info?}',function($info = null){
return "Info is : ".$info;
});

//respond in multiple url
Route::match(['get','post'],'/students',function(Request $req){
return "Request Method is ".$req->method();
});

//respond in any url
Route::any('/posts',function(Request $req){
return "The request method is ".$req->method();
});
//api controller
Route::get("data",[TestApi::class,"getData"]);
Route::get("all",[TestApi::class,"list"]);
Route::post("add",[TestApi::class,"addCompany"]);
