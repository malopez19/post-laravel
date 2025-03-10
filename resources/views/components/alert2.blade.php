{{--  {{ $attributes->merge([ p-4 text-sm rounded-lg . {{$type}} ]) }}  --}}

{{-- se accede desde la clase Alert2 en: app > view > Components > Alert2.php--}}
<div class="p-4 text-sm rounded-lg {{$class}}" role="alert">
    <span class="font-medium">{{$title ?? 'Info alert'}}</span>
    {{$slot}}
</div>
