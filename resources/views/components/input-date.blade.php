@props(['id', 'type' => 'text', 'name' => null])


<!-- Input Field -->
<input type="{{ $type ?? 'text' }}" id="{{ $id }}" name="{{ $name ?? $id }}"
    {{ $attributes->merge([
        'class' => ' border border-green-600 peer p-3 sm:p-4 block w-full rounded-lg sm:text-sm placeholder:text-transparent focus:outline-none disabled:opacity-50 disabled:pointer-events-none'
    ]) }}>
