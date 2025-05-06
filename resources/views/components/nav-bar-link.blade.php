@props(['href' => '#'])

<a href="{{ $href ?? '#' }}"
    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">{{ $slot}}</a>
