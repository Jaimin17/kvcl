<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Electricity;

class FormController extends Controller
{
    public function index(){
        return view("user");
    }

    public function store(Request $req){
        $req->validate([
            "name" => "required",
            "email" => "required|email",
            "password" => "required",
            "password_confirmation" => "required|same:password"
        ]);
        echo "<pre>";
        print_r($req->all());
        $customer = new Customer;
        $customer->name = $req["name"];
        $customer->email = $req["email"];
        $customer->password = md5($req["password"]);
        $customer->save();
    }

    public function view(){
        $customer = Customer::all();
        $data = compact("customer");
        return view("index")->with($data);
    }

    public function userDetail($id){
        $detail = Electricity::where('user_id', "=", $id)
                            ->get();
        $data = compact("detail");
        return view("detail")->with($data);
    }
}
