<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        $comments = Comment::findOrFail($id);
        
        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'desc' => 'required|max:191',
            'post_id' => 'required|max:191',
            'user_id' => 'required|max:191',
        ]);

        if (!$validateData) {
            return response()->json([
                'status' => 400,
                'errors' => "Something went wrong",
            ]);
        } else {
    
            $comment = new Comment;
            $comment->desc = $request->input('desc');
            $comment->post_id = $request->input('post_id');
            $comment->user_id = $request->input('user_id');
            $comment->save();
    
            return response()->json([
                'status' => 200,
                'message' => 'Comment added successfully',
            ]);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show', compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
