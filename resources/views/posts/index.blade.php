@extends('layouts.app')
@section('content')
    <h1 class="flex justify-center">Obteniendo los post</h1>
    <a href="/posts/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-4 rounded">Crear post</a>

    <div class="grid grid-cols-3 gap-4 my-6">
        @foreach ($posts as $post)
            <div class="bg-white shadow rounded p-4">
                <h2 class="text-lg font-bold text-gray-700">{{ $post->title }}</h2>
                <a href="/posts/{{ $post->id }}" class="text-blue-500">Mostrar post{{ $post->id }}</a>
                <p class="text-sm text-gray-600">{{ $post->content }}</p>
            </div>
        @endforeach
    </div>
    {{-- PAGINATE --}}
    <div class="flex justify-center mt-4">
        {{ $posts->links() }}
    </div>
@endsection
