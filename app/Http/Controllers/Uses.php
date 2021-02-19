<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Users extends Controller
{
    public function index($name){
        echo $name;
        echo"<br>";
        echo "Hi this is from controllers";
    }
    public function userAbout(){
        return view("about",["name"=>["Alamin","rokib","kanon"]]);
    }
    public function userForm(Request $req){
        $req->validate([
            "name"=>"required | max:50",
            "pass"=>"required | min:6"
        ]);
        return $req->input();
    }
}
