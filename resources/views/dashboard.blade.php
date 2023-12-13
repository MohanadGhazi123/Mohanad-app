<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
@section('content')
    <div class="py-12">
        <div class="container mt-2 text-white">
            <div class="row g-3 mb-5 grid grid-cols-2 md:grid-cols-3">
                <div class="col-md-2 ">
                
                    <div class="justify-start">
                        <div class="p-5 border border-gray-500 rounded-lg shadow 
                        hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 justify-center">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 
                        focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium 
                        rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <a href="{{ route('posts.create') }}">create</a>
                        </button>
                        </div>
                        
                    </div>
            
                </div>
                <div class="col-md-8 ">
                    <div class=" p-6  border border-gray-200 rounded-lg shadow 
                    hover:bg-gray-100 dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-700">
                        @foreach($p as $post)
                        <div class="m-5 p-6  border border-gray-200 rounded-lg shadow 
                        hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            {{$post->user->name}}
                        
                        <div class=" p-6  border border-gray-500 rounded-lg shadow 
                        hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        {{ $post -> text }}
                        </div>
                    </div>
                    @endforeach
                    <div class="mt-4">
                        {{$p->links()}}
                    </div>
                    </div>

                </div>
            <div class="col-md-2"><P>jifnvodfnv</P></div>
        </div>
       
    </div>
    </div>
 @endsection;   
</x-app-layout>
