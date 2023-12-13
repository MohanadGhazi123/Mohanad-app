<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>


@section('content')

<div class="text-white mt-4">

    <div class="grid grid-cols-4 gap-8">
        @foreach($posts as $post)
        <div class="block max-w-sm p-6  border border-gray-200 rounded-lg shadow 
            hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                {{ $post->user->name  }}
                <div class="block max-w-sm p-6  border border-gray-200 rounded-lg shadow 
                    hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        {{ $post -> text }}
                </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
</x-app-layout>