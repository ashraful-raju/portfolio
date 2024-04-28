@props(['text'])

@php
    $classNames = ['bg-green-100 text-green-800', 'bg-red-100 text-red-800', 'bg-yellow-100 text-yellow-800'];
@endphp

<span
    class="text-sm font-medium me-2 px-2.5 py-0.5 rounded {{ $classNames[array_rand($classNames)] }}">{{ $text }}</span>
