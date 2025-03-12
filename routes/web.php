<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/prueba', function () {
    /*  //nuevo post
    $post = new Post();
    $post->title = 'PoSt dE PrUebA5';
    $post->content = 'Cuerpo del post de prueba';
    $post->save();

    return $post; */


    /* //$post = Post::find(1);
    $post = Post::where('title', 'Post de prueba2')->first();

    $post->title = 'Post de prueba2 actualizado';
    $post->save();
    return $post; */

    /* $post = Post::find(2);
    $post->save();
    return $post; */

    //listar todos los post
    $post = Post::get();
    return $post;

    /* //eliminar post
    $post = Post::find(1);
    $post->delete();
    return $post; */


});
