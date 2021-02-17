<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($name){
    	echo $name;
        echo "Hi this is from controllers";
    }
}
