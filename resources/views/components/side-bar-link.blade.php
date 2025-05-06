@props(['href' => '#'])

@php
    $isActive = request()->url() == url($href) || request()->routeIs($href);
    $baseClasses = 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm rounded-lg focus:outline-none';
    $activeClasses = 'bg-green-500 text-white';
    $inactiveClasses = 'text-gray-800 hover:text-white hover:bg-green-500 focus:text-white focus:bg-green-500';
@endphp

<a
    {{ $attributes->merge([
        'href' => $href,
        'class' => $baseClasses . ' ' . ($isActive ? $activeClasses : $inactiveClasses)
    ]) }}>
    {{ $slot }}
</a>
