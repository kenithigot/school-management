@props(['id', 'buttonLabel', 'type' => 'button', 'name' => null, 'loadLabel'])

<div x-data="{ loading: false }">
    <button
        type="{{ $type }}"
        id="{{ $id }}"
        name="{{ $name ?? $id }}"
        @click="loading = true; setTimeout(() => $el.closest('form')?.submit(), 2000)"
        {{ $attributes->merge(['class' => 'w-full p-3 sm:p-4 bg-green-500 hover:bg-green-600 focus:bg-green-600 text-white inline-flex justify-center items-center text-sm font-medium rounded-lg cursor-pointer']) }}
        :disabled="loading"
    >
        <span
            x-show="loading"
            class="animate-spin inline-block size-4 border-3 border-current border-t-transparent text-white rounded-full mr-2"
            role="status"
            aria-label="loading"
        ></span>
        <span x-text="loading ? '{{$loadLabel ?? ''}}...' : '{{ $buttonLabel }}'"></span>
    </button>
</div>
