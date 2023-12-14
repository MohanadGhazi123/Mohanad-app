@extends('layouts.app')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>


@section('content')

<div class="text-white mt-4 w-2/4">
    <div class=" m-5 p-6  border border-gray-500 rounded-lg shadow 
    hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="InputPost" class="form-label">Post</label>
          <input type="text" class="form-control" name="postText">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
</div>


@endsection
</x-app-layout>