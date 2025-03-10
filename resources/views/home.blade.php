<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel 12</title>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
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
    </div>
</body>
</html>
