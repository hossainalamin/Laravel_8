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
        return view("about");
    }
}
