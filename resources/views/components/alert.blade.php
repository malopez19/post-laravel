@props(['type'])

@php
    $classes = [
        'success' => 'bg-green-50 text-green-800 dark:bg-green-300 dark:text-green-800',
        'danger' => 'bg-red-50 text-red-800 dark:bg-red-300 dark:text-red-800',
        'warning' => 'bg-yellow-50 text-yellow-800 dark:bg-yellow-300 dark:text-yellow-800',
        'info' => 'bg-blue-50 text-blue-800 dark:bg-gray-800 dark:text-blue-400',
        'dark'  => 'bg-gray-800 text-gray-400 dark:bg-gray-800 dark:text-gray-400',
    ];

    $type = $classes[$type] ?? $classes['info'];
@endphp

{{--  {{ $attributes->merge([ p-4 text-sm rounded-lg . {{$type}} ]) }}  --}}
<div class="p-4 text-sm rounded-lg {{$type}}" role="alert">
    <span class="font-medium">{{$title ?? 'Info alert'}}</span>
    {{$slot}}
</div>
