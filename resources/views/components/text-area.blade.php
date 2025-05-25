@props(['placeholder' => 'Type something...', 'rows' => 1, 'id' => 'text-area', 'name' => 'text-area'])

{{-- Text Area --}}

<div class="max-w-lg space-y-3">
    <textarea
        class="py-2 px-3 sm:py-3 sm:px-4 block w-full bg-w-100 border border-green-500 rounded-lg sm:text-sm focus:border-green-600 focus:ring-green-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-none"
        rows="{{ $rows ?? '1' }}" id="{{ $id }}" name="{{ $name ?? $id }}"
        placeholder="{{ $placeholder ?? 'Type something...' }}"></textarea>
</div>
