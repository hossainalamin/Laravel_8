<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
    public function queryBuilder(){
        //return DB::table('users')->where('id',1)->get();
        // return DB::table('users')->where('id',2)->insert([
        //     "name"=>"Alamin",
        //     "email"=>"email@gmail.com"
        // ]);
        //return DB::table("users")->where("id",2)->update([
        //     "name"=>"maisha"
        //   ]);
        return DB::table('users')->where('id',2)->delete();
    }
    public function agrigate(){
        //return DB::table('tbl_user')->sum('id');
        //return DB::table('tbl_user')->avg('id');
        //return DB::table('tbl_user')->count('id');
        //return DB::table('tbl_user')->min('id');
        return DB::table('tbl_user')->max('id');
    }
    public function innerJoin(){
        return DB::table("tbl_user")
        ->join("users","tbl_user.id","=","users.id")
        ->get();
    }

}
