@props(['src', 'alt' => '', 'label'])

<div class="p-4 bg-green-600 rounded-b-xl md:px-7">
    <div class="flex items-center gap-x-3">
        <div class="shrink-0">
            <img class="size-8 sm:size-11.5 rounded-full"
                src="{{ $src }}" alt="{{ $alt ?? '' }}">
        </div>

        <div class="grow">
            <p class="text-sm sm:text-base font-semibold text-white">
                {{ $label }}
            </p>
            <p class="text-xs text-white">
                {{ $slot }}
            </p>
        </div>
    </div>
</div>