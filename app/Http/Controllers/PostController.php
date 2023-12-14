<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $posts = Post::orderBy('created_at','DESC')->paginate(5);
        return view('posts.index', ['posts' => $posts]);
        
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->text = $request->postText;
        $post->user_id = 1;
        $post->save();

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'text' => 'required|max:250',
            //'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust file types and size as needed
        ]);

        $post = Post::findOrFail($id);

        // $imagePath = null;

        // if($request->hasFile('image')){
        //         $imagePath = $request->file('image')->store('images/posts', 'public');
        //     }
        // else{
        //     $imagePath = null;
        // }
        // //dd($imagePath);
        $post->update([
            'text' => $request->input('text'),
            // 'image' => $imagePath,
        ]);

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
