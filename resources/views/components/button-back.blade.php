@props(['href' => '#'])
<a href="{{ $href }}"
    {{ $attributes->merge(['class' => ' p-3 sm:p-4 bg-blue-500 hover:bg-blue-600 focus:bg-blue-600 text-white inline-flex justify-center items-center text-sm font-medium rounded-lg cursor-pointer']) }}>
    {{ $slot }}
</a>
