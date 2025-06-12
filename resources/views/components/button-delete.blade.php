@props(['type' => 'button'])
<button type="{{ $type }}"
    {{ $attributes->merge(['class' => ' p-3 sm:p-4 text-gray-800 inline-flex justify-center items-center text-sm font-medium rounded-lg cursor-pointer']) }}>
    {{ $slot }}
</button>
