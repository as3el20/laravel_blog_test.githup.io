@extends('layouts.app')
@section('content')
         {{-- Hero  --}}
    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold">Welcome To My Blog</h1>
        <a class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl" href="/">Start Reading</a>
    </div>
    {{-- How to be an expert  --}}
    <div class="container sm:grid grid-cols-2 gap-20 mx-auto py-20">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="8.jpg" alt="">
        </div>

        <div class="flex flex-col items-left justify-center m-10 sm:m-0" style="padding: 20px 0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase">
                How to be an expert in 2023
            </h2>
            <p class="font-bold text-gray-600 text-xl pt-2">You can find A list of all programming languages here</p>
            <p class="py-4 text-gray-500 text-sm leading-6">Get the same random images every time based on</p>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/">Read More</a>
        </div>
    </div>
    {{-- Blog Categories  --}}
    <div class="text-center p-15 bg-gray-700 text-gray-100" style="padding: 20px 0">
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-2xl py-2">Ux Designe</div>
            <div class="font-bold text-2xl py-2">Programming</div>
            <div class="font-bold text-2xl py-2">Graphic Design</div>
            <div class="font-bold text-2xl py-2">Front-End Developer </div>
        </div>
    </div>
    {{-- Recent Posts  --}}
    <div class="container mx-auto text-center py-15 px-10">
        <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
        <p class="text-gray-400 leading-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non officiis eaque impedit aut cum pariatur facere vitae nam consectetur, explicabo eveniet illum hic, esse quasi repellat unde, voluptate dignissimos tenetur.

        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto" style="padding: 40px 0">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="block m-auto pt-4 pb-15 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-gray-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hove:text-yellow-100 transition duration-300"><a href="/">php</a></li>
                    <li class="bg-yellow-100 text-gray-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hove:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
                    <li class="bg-yellow-100 text-gray-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hove:text-yellow-100 transition duration-300"><a href="/">languages</a></li>
                    <li class="bg-yellow-100 text-gray-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hove:text-yellow-100 transition duration-300"><a href="/">Backend</a></li>
                </ul>
             
                <h3 class="text-l py-10 leading-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis ipsum eum nisi quas tempore. Fugiat quae quas dolor, assumenda unde facilis voluptate nihil fuga odio, possimus sequi, quod vel?
                </h3>
                <a class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block mb-10"  href="/">Read More</a>
            </div>
        </div>
        <div class="flex">
            <img class="object-cover" src="1.jpg" alt="">
        </div>

    </div>
@endsection