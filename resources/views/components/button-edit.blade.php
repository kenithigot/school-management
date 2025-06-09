@props(['type' => 'button', 'ariaControl' => '', 'dataOverlay' => ''])

<button
    {{ $attributes->merge(['class' => 'cursor-pointer text-green-600 hover:text-white border border-green-600 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-0 text-center']) }}
    type="{{ $type ?? 'button' }}" aria-expanded="false" aria-controls="{{ $ariaControl }}"
    data-hs-overlay="{{ $dataOverlay }}">
    {{ $slot }}
</button>

