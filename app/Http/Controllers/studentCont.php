<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class studentCont extends Controller
{
    public function get()
    {
        // return  students::orderBy('id','DESC')->paginate(5);
           return  students::orderBy('id','DESC')->get();

    }
    public function post(Request $request)
    {
       $students=students::create([
           'Name'=>$request->Name,
           'Email'=>$request->Email
       ]);
       if($students){
           return response()->json(['alert'=>'insert student successfully'],200);
       }else{
           return response()->json(['alert'=>'insert student Failed!'],404);
       }

    }
}
