@props(['src', 'alt' => ' '])

<div
    class="logo-item opacity-0 translate-y-10 duration-700 ease-in-out shrink-0 transition hover:-translate-y-3 cursor-pointer flex justify-center">
    <img src="{{ $src }}" class="object-cover h-24 w-24" alt="{{ $alt ?? '' }}">
</div>
