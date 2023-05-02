<?php

namespace App\Http\Controllers;

use App\Models\Files;
use Illuminate\Http\Request;

class uploadFileCont extends Controller
{
    public function index(){
        return view('upload');
    }
    public function create(Request $req){
        $validated = $req->validate([
            'file'=>'required|mimes:jpg,png,jpeg|max:1000'
        ]);
        if($validated){
            $requestDecode = json_decode($req->data, true);
            $file_name = time() . '.' . $req->file->getClientOrignalExtension();
            $file_path = $req->file('file')->storeAs('pics',$file_name,'public');
            Files::create([
                'file' => $file_name
            ]);
            return response()->josn(['alert' => 'Success'], 200);
        }else{
            return response()->josn(['alert' => 'Error'], 404);

        }
    }
}
