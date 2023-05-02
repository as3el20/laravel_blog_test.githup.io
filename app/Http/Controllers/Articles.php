<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Articles extends Controller
{
    public function index(){
        return view('articles');
    }
    // Passing Data By Compact Method
    public  function Display(Request $request,$id){
        // return view('article',compact('id'));
        $x = 5 + 15;
        //return view('article',compact([$x =>'x']));
         return view('article',compact('x'));
    }
}
