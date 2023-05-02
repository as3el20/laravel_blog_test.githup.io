<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
/**
 * Summary of postsCont
 */
class postsCont extends Controller
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
    public function store(Request $req)
    {
        $req->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg'
        ]);
        $slug=Str::slug($req->title,'-'); 

        $newimageName=uniqid().'-'.$req->title.'.'.$req->image->extension();
        $req->image->move(public_path('image'), $newimageName);

        post::create([
            'Title'=>$req->input('title'),
            'Slug'=>$slug,
            'Description'=>$req->input('description'),
            'Image_Path'=>$newimageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog');

    }
   
    public function display($slug)
    {
        // $data=post::where('Slug',$slug)->first();
        // dd($data);

        return view('blog.show')->with('post',post::where('Slug',$slug)->first());
    }
    public function edit($slug)
    {
        return view('blog.edit')->with('post',post::where('Slug',$slug)->first());

    }
    public function update(Request $req,$slug)
    {
        $req->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg'
        ]);
        $slug=Str::slug($req->title,'-'); 

        $newimageName=uniqid().'-'.$req->title.'.'.$req->image->extension();
        $req->image->move(public_path('image'), $newimageName);

        post::where('slug',$slug)->updated([
            'Title'=>$req->input('title'),
            'Slug'=>$slug,
            'Description'=>$req->input('description'),
            'Image_Path'=>$newimageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog/'. $slug)->with('message','It is Done') ;
    }
    public function delete($slug)
    {
        post::where('slug',$slug)->delete();
        return redirect('/blog'. $slug)->with('message','It is Deleted') ;
    }
}
