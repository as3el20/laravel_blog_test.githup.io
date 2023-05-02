@extends('layouts.app')
@section('content')
{{session()->get('message')}}
<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">
    {{$post->Title}}
    </h1>
    <div class="mt-2">
        <span>By:<span class="text-gray-500 italic">{{$post->user->name}}</span></span><br><br>
        <span>Updated At:<span class="text-gray-500 italic">{{Date('d-m-Y',strtotime($post->update_at))}}</span></span>
    </div>
</div>

<div class="container m-auto text-center pt-15 pb-5">
    <div class="flex h-96">
        <img class="object-cover" src="{{asset('/image'.'/'.$post->Image_Path)}}" alt="">
    </div>
    <div class="text-l text-gray-700 py-8 leading-6">
        {{$post->Description}}
    </div>
    @if (Auth::user() && Auth::user()->id == $post->user_id)
    <a class="bg-green-700 text-green-100 py-4 px-5 mt-6 inline-block rounded-lg font-bold uppercase text-l place-self-start"
    href="{{url('/blog/$post->Slug/edit')}}">Edit Post</a> 

    <form action="/blog/{{$post->Slug}}" method="POST" class="inline-block">
    @csrf
    {{-- @method('delete') --}}
    <button type="submit"
            class="bg-red-700 text-red-100
            py-4 px-5 mt-6 inline-block rounded-lg
            font-bold uppercase text-l
            place-self-start">
        Delete The Post
    </button>
    </form> 
    @endif
   
</div>
@endsection