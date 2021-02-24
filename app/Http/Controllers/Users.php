<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Http;
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
            "name"=>" required | max:50",
            "pass"=>"required | min:6"
        ]);
        return $req->input();
    }
    public function database(){
        return DB::select("SELECT * FROM tbl_user");
    }
    public function httpRequest(){
        $data = Http::get("http://localhost/RestApi/api-fetch-single.php");
        return view("http",["data"=>$data['message']]);
    }
    public function httpMethod(Request $req){
        return $req->intput();
    }
}
