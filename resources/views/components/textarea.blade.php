@props(['value'])

<textarea rows="3" cols="180" {!! $attributes->merge([
    'class' => 'border-gray-300 w-full focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm',
]) !!}>{{ $value }}</textarea>
