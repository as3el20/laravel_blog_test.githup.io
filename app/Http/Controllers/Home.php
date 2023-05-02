<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class Home extends Controller
{
    public function index(){
        //session()->put('name', 'Ali Abdulwahid');
        //return dd(session()->all());
        //return session()->get('name');
        //return "HOME Page";
        if(session()->has('name')){
            return "Avaliable";
        }
        else{
            return "NOT";
        }
        //return session()->forget('name');
        //return session()->get('name');
         // return session()->flush();


    }
}
