<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\ModelConnection;
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
Route::get('login',function(){
    return view('userform');
});
Route::view("noaccess","noaccess");
Route::view("http","http");
Route::view("addmember","addmember");
Route::get('profile',function(){
    if(!session()->has('name')){
        return redirect('login');
    }
});
Route::get('/userlogin',function(){
    if(session()->has('name')){
        return redirect('profile');
    }
});
Route::get('/logout',function(){
    if(session()->has('name')){
        session()->pull('name');
    }
    return redirect('login');
});

//rediection from  page
Route::get('/about',function(){
return view('about');
//return redirect ("/");
})->middleware('protectedpage');
//another way of routing
//Route::view('contact','contact');

//passing data with routing with route contraints
Route::get('/contact/{number}',function($number){
    return view ('contact',["number"=>"$number"]);
})->where('number','[0-9]+');

//Routing for controllers
Route::get("users/{name}",[Users::class,'index']);
Route::get("about",[Users::class,'userAbout']);
//Route::post("userform",[Users::class,'userForm']);
Route::get('database',[Users::class,'database']);
Route::get('modelconnection',[ModelConnection::class,'getData']);
Route::get('http',[Users::class,'httpRequest']);
Route::delete("method",[Users::class,'httpMethod']);
Route::post('userlogin',[UserAuth::class,'userLogin']);
Route::post('useradd',[UserAuth::class,'userAdd']);

//route for middleware
Route::group(['middleware'=>['protectedpage']],function(){
    Route::get('/contact',function(){
        return view('contact');
        });
});