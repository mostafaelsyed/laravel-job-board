<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // code to display a list of posts
        // $data = Post::all();
        $data = Post::paginate(25);
        // $data = Post::cursorPaginate(5);

        // pass the data to the view
        return view('post.index', compact('data'), ['title' => 'Blog Posts']);
    }
    public function show($id)
    {
        // code to display a single post
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }
    public function create()
    {
        // code to show a form for creating a new post
        // $post =  Post::create([

        //     'title' => 'my find unique post',
        //     'body' => 'This is the body of the new post.',
        //     'published' => true,
        //     'author' => 'mostafa'
        // ]);
        // Post::factory()->count(100)->create();
        Post::factory(100)->create();
        return redirect('/blog');
    }

    public function delete($id)
    {
        // code to delete a post
        $post = Post::findOrFail($id);
        $post->delete();
        // return redirect('/blog');
    }
}
