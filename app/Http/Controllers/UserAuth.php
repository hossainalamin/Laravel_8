<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $req){
        $req->validate([
            "name" => "required|max:10",
            "pass"=>"required|min:6"
        ]);
        return $req->input();
    }
}