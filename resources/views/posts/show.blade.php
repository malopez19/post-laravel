@extends('layouts.app')
@section('content')
    <div class="bg-white shadow rounded p-4">
        <a href="/posts" class="text-sm text-gray-600">⬅️ Volver a posts</a>
        <h2 class="text-lg font-bold text-gray-700">{{ $post->title }}</h2>
        <h3 class="text-sm text-gray-600">Categoria {{ $post->category_id}}</h3>
        <p class="text-sm text-gray-600 mt-2">{{ $post->content }}</p>
        <button class="mt-5 bg-blue-500 w-auto p-2">
            <a href="/posts/{{ $post->id }}/edit" class="text-white">
                Editar post
            </a>
        </button>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="mt-5 bg-red-500 w-auto p-2">
                Eliminar post
            </button>
        </form>
    </div>
@endsection

