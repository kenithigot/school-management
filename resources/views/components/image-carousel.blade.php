@props(['src', 'alt'=> ''])

<div class="hs-carousel-slide">
    <img class="rounded-xl" src="{{ $src }}" alt="{{ $alt ?? '' }}">
</div>