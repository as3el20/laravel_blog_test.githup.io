@extends('layouts.app')

@section('content')
<div class=" container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">All Posts</h1>
</div>

{{-- Make Button To Create Post Dynamicly --}}
@if (Auth::check())
<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
    <a class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="test/public/blog/create">Create New Post</a>
</div>
@endif
@foreach ($posts as $post)

<div class=" container sm:grid grid-cols-2 gap-20 mx-auto py-15 px-5 pb-10 border-b border-gray-300">
    <div class="flex">
        <img class="object-cover" src="./image/{{$post->Image_Path}}" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{$post->Title}}</h2>
        <span>By:<span class="text-gray-500 italic">{{$post->user->name}}</span></span><br><br>
        <span>Updated At:<span class="text-gray-500 italic">{{Date('d-m-Y',strtotime($post->update_at))}}</span></span>

        <p class="text-l text-gray-700 py-8 leading-6">{{$post->Description}}
        </p>
        <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="test/public/blog/{{$post->Slug}}">Read More</a>
    </div>
</div>

@endforeach
   
@endsection