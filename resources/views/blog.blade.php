
@extends('layouts.main')
@section('content')
        <h1 class="text-3xl text-center font-bold mb-4">Welcome to BlogSpace</h1>

<h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Blog Posts</h2>

@if(count($posts) > 0)
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($posts as $post)
            @if($post['published'])
                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $post['title'] }}</h3>
                    <p class="text-sm text-gray-500 mb-1"><strong>Author:</strong> {{ $post['author'] }}</p>
                    <p class="text-gray-700">{{ $post['summary'] }}</p>
                </div>
            @endif
        @endforeach
    </div>
@else
    <p class="text-gray-500 text-base">No blog posts available.</p>
@endif

@endsection