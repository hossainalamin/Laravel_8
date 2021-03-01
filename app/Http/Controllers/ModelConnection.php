<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

class ModelConnection extends Controller
{
    public function getData(){
         return User::all();
    }
    public function showData(){
        $data = User::paginate(5);
        return view('database',["data"=>$data]);
    }
    public function userAdd(Request $req){
        $object = new User();
        $object->name  = $req->user;
        $object->email = $req->email;
        $object->save();
        return redirect('add');
    }
    public function deleteData($id){
        $data = User::find($id);
        $data->delete();
        return redirect('datashow');
    }
    public function editData($id){
        $data = User::find($id);
        return view("edit",["data"=>$data]);
    }
    public function updateData(Request $req){
        $data = User::find($req->id);
        $data->name  = $req->user;
        $data->email = $req->email;
        $data->save();
        return redirect('datashow');
    }
    public function accessors(){
        return Member::all();
    }
    public function mutators(){
        $member = new Member();
        $member->name = "sojib"; 
        $member->email = "sojib@gmail.com"; 
        $member->address = "jatrabari";
        $member->save(); 
    }
    public function company(){
        return Member::find(2)->getCompany;
    }
    public function model(Company $key){
        return $key;
    }
    public function list(){
        //return DB::table('companies')->get();
        //return DB::connection('mysql2')->table('tbl_user')->get();
        return Blog::all();
    }

}
