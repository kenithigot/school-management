@props(['isActive' => false])

@php
    $baseClasses = 'cursor-pointer hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg focus:outline-none';
    $activeClasses = 'bg-green-500 text-white';
    $inactiveClasses = 'text-gray-800 hover:bg-green-500 hover:text-white focus:text-white focus:bg-green-500';
@endphp

<button type="button"
    {{ $attributes->merge([
        'class' => $baseClasses . ' ' . ($isActive ? $activeClasses : $inactiveClasses),
        'aria-expanded' => $isActive ? 'true' : 'false',
    ]) }}>
    {{ $slot }}
</button>
