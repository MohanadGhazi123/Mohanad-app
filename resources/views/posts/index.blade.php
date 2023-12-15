<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Posts') }}
      </h2>
  </x-slot>


@section('content')

<div class="text-white mt-4 w-2/4">
  <div class=" m-5 p-6  border border-gray-500 rounded-lg shadow 
  hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
  {{-- <form action="{{ route('posts.store') }}" method="post" id="postForm"> --}}
    <form action="{{ route('posts.store') }}" method="post" id="postForm" enctype="multipart/form-data"> 
      @csrf
      <div class="row">
          <div class="col-12">
            <label for="InputPost" class="form-label">Post</label>
            <input type="text" class="form-control" name="postText">
          </div>
          <div class="col-12">
            <label for="InputPost" class="form-label">Image</label>
            <input type="file" class="form-control" name="image">
          </div>
          <div class="col-12">
            <input type="submit" value="Posts">
          </div>
      </div>
    </form>
  </div>
  
</div>

<div class="py-12">
  <div class=" mt-2 text-white ">
          
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
                        <img src="{{asset('uploads/post_images/'.$post->posts_image)}}" class="card-img-top">
                        <div>
                          @foreach($post->comments as $comment)

                             <p>{{ $comment->desc }}</p>

                          @endforeach
                        </div>

                        <div class="justify-center">
                          @auth
                          @if(Auth::id() === $post->user->id)
                          <a class="hover:text-blue-700 bg-green-400 text-white py-0.5 px-4 rounded hover:no-underline p-2 md:p-2" href="{{ route('posts.edit', ['id' => $post->id]) }}">Edit</a>
                          @endif    
                          @endauth
                        <a href="{{ route('comments.index', ['id' => $post->id]) }}" class="btn btn-primary">Comment</a>
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