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
        $data = $req->input();
        $req->session()->put('name',$data['name']);
        return redirect('profile');
    }
    public function userAdd(Request $req){
        $data = $req->input('user');
        $req->session()->flash('user',$data);
        return redirect('addmember');
    }

}