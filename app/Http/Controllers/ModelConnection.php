<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ModelConnection extends Controller
{
    public function getData(){
    	return User::all();
    }
}
