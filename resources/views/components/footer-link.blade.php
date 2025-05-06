@props(['href' => '#'])

<a href="{{ $href ?? '#'}}"
                class="underline underline-offset-4 px-1 text-sm font-semibold text-white">{{ $slot }}</a>