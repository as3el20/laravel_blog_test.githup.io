<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesCont extends Controller
{
    public function index()
    {
        return view('index2');
    }

}
