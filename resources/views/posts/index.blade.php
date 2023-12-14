<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>


@section('content')

<div class="py-12">
    <div class=" mt-2 text-white ">
            
            <div class="col-md-9 w-75 ">
                <div class=" m-12 p-5 border border-gray-500 rounded-lg shadow 
            dark:bg-gray-800 dark:border-gray-700  ">
            <button type="button" class="btn btn-outline-primary">
                <a href="{{ route('posts.create') }}">create</a>
            </button>
            </div>
                <div class=" m-12 p-6  border border-gray-200 rounded-lg shadow 
                 dark:bg-gray-900 dark:border-gray-700 ">
                 
                    @foreach($posts as $post)
                    <div class="card text-black m-5">
                        <div class="card-header">
                            {{$post->user->name}}
                        </div>
                        <div class="card-body">
                          <p class="card-text">{{ $post -> text }}</p>
                          <div class="justify-center">
                            <a href="#" class="btn btn-primary">Edit</a>
                          <a href="#" class="btn btn-primary">Comment</a>
                          </div>
                          
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="mt-4">
                    {{$posts->links()}}
                </div>
            </div>

        </div>
        
    
   
</div>
</div>
@endsection
</x-app-layout>