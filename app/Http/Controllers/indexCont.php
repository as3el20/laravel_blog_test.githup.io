<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest;
use App\Models\post;
use App\Models\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexCont extends Controller
{
    
    // public function index2(){
    //     return view('welcome');
    // }
    //////////////////////////////////////////////////////
//        public function index(Request $request,$id){
//        return view('welcome');
// }
    //    public function index(){
    //     return view('index');
    //    }
    //    public function index(){
    //     $x = 10;
    //     $users = ['Aseel', 'Ali', 'Ahmed'];
    //     return view('test_layouts',compact('x','users'));
    // //    }
    //        public  function select_DB()
    //        {
    //        // $select = DB::table('students')->get();
    //        // by using Model
    //         //$select = students::orderby('id','DESC')->get();

    //          $select = DB::table('students')->orderBy('id','DESC')->limit(1)->with('grade')->get();
    //           return view('test_layouts',compact('select'));
    //     //return $select;
    //        }
    //        public function insert_DB(Request $request){
    //         //$inserted = DB::table('students')->insert([
    //             // by using Model
    //         $inserted = students::insert([

    //         'Name'=>$request->Name,
    //         'Email'=>$request->Email
    //     ]);
    //     return redirect()->back();
    //        }
    //        public function Delete_DB(Request $request,$id){
    //         //$Deleted = DB::table('students')->where('id','=',$id)->delete();
    //         // by using model
    //         $Deleted = students::where('id','=',$id)->delete();

    //         return redirect()->back();
    //            }
    //        public function Update_DB(Request $request,$id){
    //               //$updated = DB::table('students')->where('id','=',$id)->first();
    //                           // by using model
    //               $updated = students::where('id','=',$id)->first();

    //               return view('update',compact('updated'));
    //        }
    //        public function BackHome_DB(Request $request,$id){
    //            // $updated = DB::table('students')->where('id','=',$id)->update([
    //                          // by using model
    //             $updated = students::where('id','=',$id)->update([

    //             'Name'=>$request->name,
    //             'Email'=>$request->email
    //         ]);
    //         return redirect()->back();
    //        }
    //////////////////////////////////////////////////////////////////////////
    // Validation Form
              public function create()
              {
                 return view('create');
              }
              public function store(postRequest $request){
                if($request->validated()){
                    post::create([
                      'Title' => $request->Title,
                      'Content' => $request->Content
                    ]);
                }
              }
}
