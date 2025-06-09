<button type="{{ $type ?? 'button' }}"
    {{ $attributes->merge(['class' => 'cursor-pointer py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-hidden focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none']) }}>
    {{ $slot }}
</button>
