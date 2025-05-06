@props(['label', 'href'=>'#'])

<li class="inline-flex items-center">
    <a class="flex items-center text-sm text-gray-500 hover:text-green-600 focus:outline-hidden focus:text-green-600"
        href="{{ $href ?? '#' }}">
        <div class="me-3"> {{$slot}} </div>
       {{ $label }}
        <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
        </svg>
    </a>
</li>
