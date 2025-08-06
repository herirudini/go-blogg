@extends('layouts.main')
 
@section('content')
 
    <div class="flex flex-col md:flex-row gap-8">
        <div class="w-full md:w-3/4 lg:w-3/4">
            <x-card>
                <h3 class="mb-8 text-2xl text-left font-semibold">Latest Articles</h3>
                <ul class="mt-4 space-y-4">
                    <li class="flex border-b pb-2 items-start">
                        <img src="{{ asset('assets/images/landscape-placeholder-svgrepo-com.svg') }}" alt="Post Image 1" class="w-16 h-16 mr-4 rounded">
                        <div class="text-left">
                            <h4 class="font-bold">Dummy Post Title 1</h4>
                            <p class="text-gray-600">This is a short description for the dummy post 1.</p>
                            <a href="#" class="text-blue-500 hover:underline">Read more</a>
                        </div>
                    </li>
                    <li class="flex border-b pb-2 items-start">
                        <img src="{{ asset('assets/images/landscape-placeholder-svgrepo-com.svg') }}" alt="Post Image 2" class="w-16 h-16 mr-4 rounded">
                        <div class="text-left">
                            <h4 class="font-bold">Dummy Post Title 2</h4>
                            <p class="text-gray-600">This is a short description for the dummy post 2.</p>
                            <a href="#" class="text-blue-500 hover:underline">Read more</a>
                        </div>
                    </li>
                    <li class="flex border-b pb-2 items-start">
                        <img src="{{ asset('assets/images/landscape-placeholder-svgrepo-com.svg') }}" alt="Post Image 3" class="w-16 h-16 mr-4 rounded">
                        <div class="text-left">
                            <h4 class="font-bold">Dummy Post Title 3</h4>
                            <p class="text-gray-600">This is a short description for the dummy post 3.</p>
                            <a href="#" class="text-blue-500 hover:underline">Read more</a>
                        </div>
                    </li>
                </ul>
            </x-card>
        </div>

        <div class="w-full md:w-1/4 lg:w-1/4 mt-8 md:mt-0">
            <x-card>
                <h3 class="text-xl text-left font-semibold mb-4">Categories</h3>
                <ul class="space-y-2 text-left">
                    <li><a href="#" class="text-blue-500 hover:underline">Web Development</a></li>
                    <li><a href="#" class="text-blue-500 hover:underline">Laravel</a></li>
                    <li><a href="#" class="text-blue-500 hover:underline">PHP</a></li>
                    <li><a href="#" class="text-blue-500 hover:underline">JavaScript</a></li>
                    <li><a href="#" class="text-blue-500 hover:underline">CSS</a></li>
                </ul>
            </x-card>
        </div>
    </div>

@endsection