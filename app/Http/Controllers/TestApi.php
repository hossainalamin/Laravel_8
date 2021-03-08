<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApi extends Controller
{
    public function getData(){
        return ["name"=>"Alamin","email"=>"hossainalamin980@gmail.con"];
    }
}
