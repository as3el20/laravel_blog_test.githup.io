<?php

namespace App\Http\Controllers;

use App\Mail\welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeCont extends Controller
{
    public function index()
    {
        //Mail::to('as3el2019@gmail.com')->send(new welcome);
        //return 'Welcome';
        return response()->json(['alert'=>'Welcome In API Page'],200);
    }
}
