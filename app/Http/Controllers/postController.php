<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class postController extends Controller
{
  
    public function index()
    {
         // $posts=post::all();
        // dd($posts);

        return view('blog.index')->with('posts',post::all());
    }

    public function create()
    {
        return view('blog.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $slug=Str::slug('Laravel 9 Framework','-'); 

        $newimageName= uniqid().'-'.$request->title.'.'.$request->image->extension();
        $request->image->move(public_path('image'), $newimageName);

        post::create([
            'Title'=>$request->input('title'),
            'Slug'=>$slug,
            'Description'=>$request->input('description'),
            'Image_Path'=>$newimageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog');    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
