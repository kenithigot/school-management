@props(['id', 'name' => null, 'value' => null, 'type' => 'text'])

<input id="{{ $id }}" type=" {{ $type ?? 'text' }}" name="{{ $name ?? $id }}" value="{{ $value ?? '' }}"
    {{ $attributes->merge(['class' => 'px-3 pe-11 block w-full text-gray-800 border-b border-green-500 shadow-2xs uppercase font-medium sm:text-base disabled:pointer-events-none outline-none']) }}
    readonly>
