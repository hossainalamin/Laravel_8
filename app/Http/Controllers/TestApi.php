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
    public function update(Request $req){
        $company_update = Company::find($req->id);
        $company_update->company_name = $req->name;
        $result = $company_update->save();
        if($result){
        return ["result"=>"Data has been updated"];
        }else{
        return ["result"=>"Data not updated"];
        }
    }
    public function delete($id=null){
        $result = Company::where("id","$id")->delete();
        if($result){
            return["result"=>"data deleted"];
        }else{
            return["result"=>"data not deleted"];
        }
    }
    public function search($name){
        return Company::where("company_name",$name)->get();
    }
    public function searchByChar($name){
        return Company::where("company_name","like","%".$name."%")->get();
    }
    public function testData(Request $req){
        $rules = array(
            "id"=>"required|min:1|max:5"
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),401);
        }else{
            $company = new Company();
            $company->company_name = $req->name;
            $company->member_accessor_id = $req->id;
            $result = $company->save();
            if($result){
                return["result"=>"data added"];
            }else{
                return["result"=>"data not added"];
            }
        }
    }

}
