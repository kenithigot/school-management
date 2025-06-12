@props([
    'placeholder' => 'Search...',
])

<input type="text"
    class="py-1.5 sm:py-2 px-3 ps-9 block w-full border border-green-500 focus:border-green-600 shadow-2xs rounded-lg sm:text-sm focus:z-10 outline-none"
    placeholder="{{ $placeholder }}" />
