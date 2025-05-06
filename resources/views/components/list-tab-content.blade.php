@props(['id', 'ariaLabel'])

<div id="{{ $id }}" {{ $attributes->merge(['class' => 'animate-fade-section opacity-0 transition-opacity duration-[1000ms]'])}} role="tabpanel"
    aria-labelledby="{{ $ariaLabel }}">
    {{ $slot }}
</div>
