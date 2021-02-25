<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

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
}
