@extends('layouts.app')
@section('content')
<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">
        Edit For This Post
    </h1>
</div>

<div class="container m-auto text-center pt-15 pb-5">
   <form action="/blog/{{$post->Slug}}" method="get" enctype="multipart/form-data" >
    @csrf
    {{-- @method('PUT') --}}

    <input type="text"
           name="title"
           placeholder="Title"
           class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5"
           value="{{$post->Title}}">
           
    <textarea name="description"
              placeholder="Description"
              class="w-full h-20 text-xl rounded-lg shadow-lg border-b p-15 mb-10" >
              {{$post->Description}}
            </textarea>
    <div class="py-15">
        <label class="bg-gray-200 hover:bg-gray-700
                      text-gray-700 hover:text-gray-200
                      transition duration-300
                      cursor-pointer
                      p-5 rounded-lg
                      font-bold uppercase">
            <span>Select An Image To Upload</span>
            <input type="file" name="image" class="hidden">
        </label>
    </div>
    <button type="submit"
            class="bg-green-700 hover:bg-green-200
            text-gray-200 hover:text-gray-700
            transition duration-300
            cursor-pointer
            p-5 rounded-lg mt-10
            font-bold uppercase w-full">Submit The Post
    </button>

   </form>
</div>
@endsection