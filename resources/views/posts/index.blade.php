@extends('layouts.app')

@section('content')

<div class="text-white">
<div class="p-6">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 
    focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium 
    rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <a href="{{ route('posts.create') }}">create</a>
    </button>
    
</div>
    <div class="grid grid-cols-4 gap-4">
        @foreach($posts as $post)
<div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow 
hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
{{ $post -> text }}
</div>
@endforeach
    </div>
</div>


@endsection