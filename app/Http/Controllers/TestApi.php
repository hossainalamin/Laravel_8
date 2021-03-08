<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApi extends Controller
{
    public function getData(){
        return ["name"=>"Alamin","email"=>"hossainalamin980@gmail.con"];
    }
    public function list(){
        return Company::all();
    }
    public function addCompany(Request $req){
        $company = new Company();
        $company->company_name = $req->name;
        $company->member_accessor_id = $req->id;
        $result = $company->save();
        if($result){
        return ["result"=>"Data has been saved"];
        }else{
        return ["result"=>"Data not saved"];
        }
    }
}
