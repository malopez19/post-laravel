<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function index(){

        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    function create(){

        return view('posts.create');
    }

    function store(Request $request){

        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->save();

        return redirect('/posts');
    }

    function show($post){

        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    function edit($post){

        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    function update(Request $request, $post){

        $post = Post::find($post);
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->save();
    }

    function delete($post){
        $postFound = Post::find($post);

        if ($postFound) {
            $postFound->delete();
            return redirect('/posts');
        }
    }
}
