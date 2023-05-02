<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginCont extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect()->to('dashboard');
        }else{
            return view('login');
        }
    }
    public function store(Request $req){
       $validate = request()->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        if($validate){
            $info = $req->only('name','password');
            if(Auth::attempt($info)){
                return redirect()->to('dashboard');
            }
            return redirect()->to('login');
        }
    }
}
