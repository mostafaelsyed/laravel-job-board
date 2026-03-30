<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'), ['title' => 'Tags']);
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.show', compact('tag'));
    }

    public function create()
    {
        $tags = Tag::create([
            'title' => 'backend developer',
        ]);
        return redirect('/tags');
    }

    public function delete($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect('/tags')->with('success', 'Tag deleted successfully');
    }

    public function testManyToMany()
    {
        // dd('Testing many-to-many relationship between posts and tags');
        // $post1 = Post::find(1);
        // $post2 = Post::find(2);

        // $post1->tags()->attach([1,2]);
        // $post2->tags()->attach([3]);

        // return response()->json([
        //     // 'message' => 'Tags attached to posts successfully',
        //     'post1_tags' => $post1->tags,
        //     'post2_tags' => $post2->tags,
        // ]);
        $tag = Tag::find(3);
        $tag->posts()->attach([4]);
        return response()->json([
            'tag' => $tag->title,
            'posts' => $tag->posts
        ]);
    }


}
