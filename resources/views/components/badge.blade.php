@props([
    'color' => 'green',
    'text',
])

@php
    $classNames = [
        'green' => 'bg-green-100 text-green-800',
        'red' => 'bg-red-100 text-red-800',
        'yellow' => 'bg-yellow-100 text-yellow-800',
    ];
@endphp

<span
    class="text-sm font-medium me-2 px-2.5 py-0.5 rounded {{ $classNames[$color] ?? $classNames['green'] }}">{{ $text }}</span>
