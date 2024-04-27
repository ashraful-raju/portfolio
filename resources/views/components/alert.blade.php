@props(['message'])

@if ($message)
    <div {{ $attributes->merge([
        'class' => 'p-4 mb-4 text-sm border border-blue-700 text-blue-800 rounded-lg bg-blue-50',
    ]) }}
        role="alert">
        {{ $message }}
    </div>
@endif
