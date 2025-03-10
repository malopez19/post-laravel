@extends('layouts.app')

@section('title', 'Home')

@push('css')
    <style>
        body{
            background-color: rgb(5, 5, 114);
        }

        p, h1{
            color: white;
        }
    </style>
@endpush

@section('content')
    <h1 class="text-2xl font-bold text-center">Bienvenido al home</h1>

    <x-alert type="danger" class="mb-10">
        <x-slot name="title">Alerta de información</x-slot>
        componentes anonimos
    </x-alert>

    <x-alert2 type="success" class="mb-10">
        <x-slot name="title">Alerta de información</x-slot>
        componentes de clase
    </x-alert2>

    <p>Hola mund0</p>
@endsection




