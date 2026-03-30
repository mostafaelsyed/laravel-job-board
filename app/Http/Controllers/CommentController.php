<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show', compact('comment'));
    }
    public function create()
    {
        // Comment::create([
        //     'author' => 'Ahmed Ali',
        //     'content' => 'This is a sports comment.',
        //     'post_id' => 3,
        // ]);
        Comment::factory()->count(50)->create();
        return redirect('/comments');
    }
}
