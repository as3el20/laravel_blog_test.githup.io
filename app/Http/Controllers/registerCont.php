<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerCont extends Controller
{
    public function index(){
        return view('register');
    }
    public function create(Request $req){
        $inserted = users::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
            'token'=>Hash::make(123)
        ]);
        if($inserted){
            return redirect()->back();
        }
    }
}
