@props(['type' => 'button', 'ariaControl' => '', 'dataOverlay' => ''])

<button
    {{ $attributes->merge(['class' => 'cursor-pointer bg-green-500 px-2 py-1.5 rounded-lg inline-flex items-center gap-x-1 focus:outline-hidden']) }}
    type="{{ $type ?? 'button' }}" aria-expanded="false" aria-controls="{{ $ariaControl }}" data-hs-overlay="{{ $dataOverlay }}">
    {{ $slot }}
</button>
