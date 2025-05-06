@props(['id', 'dataTab', 'ariaControl', 'span'])

<button type="button"
    {{ $attributes->merge(['class' => 'cursor-pointer hs-tab-active:bg-slate-200 hs-tab-active:hover:border-transparent w-full flex flex-col text-start hover:bg-slate-200 focus:outline-hidden focus:bg-slate-200 p-3 md:p-5']) }}
    id="{{ $id }}" aria-selected="true" data-hs-tab="{{ $dataTab }}" aria-controls="{{ $ariaControl }}"
    role="tab">
    {{ $slot }}
    <span class="sm:mt-5">
        <span class="hs-tab-active:text-green-500 block font-semibold text-gray-800 text-center">{{ $span }}</span>
    </span>
</button>
