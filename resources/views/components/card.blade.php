@props(['title', 'value', 'icon'])

<div class="flex h-64 w-64 flex-col items-center justify-center rounded-lg bg-white">
    <div class="flex flex-col space-x-2">
        <img class="mx-auto mb-5 w-8 h-8" src="https://simpleicons.org/icons/{{ $icon }}.svg"; />
        <div class="text-center text-4xl font-bold">{{ $value }}</div>
        <div class="my-2 text-center text-gray-500">
            {{ $title }}
        </div>
    </div>
</div>
