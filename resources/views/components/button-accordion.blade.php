@props(['ariaControl', 'label'])

<button
    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-green-500 rounded-lg transition hover:text-green-600 focus:outline-hidden focus:text-green-600 "
    aria-expanded="true" aria-controls="{{ $ariaControl }}">
    {{ $label }}
    {{ $slot }}
</button>
