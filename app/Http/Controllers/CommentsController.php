<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post){

        //return $request->all();

        Comment::create([
            'body' => request('body'),
            'post_id' => $post->id,
            'user_id' => auth()->id()
        ]);

        return back();

    }
}
