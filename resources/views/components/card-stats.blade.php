@props(['h4', 'span'])

<!-- Stats -->
<div>
    <h4 class="text-lg sm:text-xl font-semibold text-white">{{ $h4 }}</h4>
    <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-white">{{ $span }}</p>
    <p class="mt-1 text-white">{{ $slot }}</p>
</div>
<!-- End Stats -->

