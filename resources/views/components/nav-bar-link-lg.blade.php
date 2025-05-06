@props(['href' => '#'])

<a href="{{ $href ?? '#' }}"
    class="hover:bg-slate-100 hover:rounded-md px-1 text-base/6 font-semibold text-gray-900">{{ $slot }}</a>
