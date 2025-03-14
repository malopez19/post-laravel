@extends('layouts.app')

@section('content')

    <h1 class="flex justify-center my-6">Crear post</h1>

    <form action="/posts" method="POST" class="bg-white shadow rounded p-4 flex flex-col">
        @csrf <!-- Directiva de Blade para generar un token CSRF y proteger contra ataques CSRF -->
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" class="border-2 border-gray-200 p-2">
        <label for="category_id">Categoria</label>
        <input type="text" name="category_id" id="category_id" class="border-2 border-gray-200 p-2">
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" class="border-2 border-gray-200 p-2"></textarea>
        <button type="submit" class="mt-5 bg-blue-500 w-auto p-6">Crear post</button>
    </form>
@endsection
