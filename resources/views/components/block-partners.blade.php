@props(['label'])

<div class="grow">
    <h3 class="text-lg font-semibold text-gray-800">
        {{ $label }}
    </h3>
    <p class="mt-1 text-gray-600">
        {{ $slot }}
    </p>
</div>