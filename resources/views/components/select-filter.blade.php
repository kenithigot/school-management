@props(['id', 'name' => null, 'options' => [], 'placeholder' => ''])
<select name="{{ $name ?? $id }}" id="{{ $id }}"
    {{ $attributes->merge(['class' => 'text-gray-500 hover:text-gray-800 focus:text-gray-800 py-1.5 sm:py-2 px-3 ps-9 block w-full border border-green-500 focus:border-green-600 shadow-2xs rounded-lg sm:text-sm focus:z-10 outline-none']) }}>
    <option value="" selected disabled>{{ $placeholder }}</option>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}">{{ $label }}</option>
    @endforeach
</select>
{{-- 
@props(['id', 'name' => null, 'options' => [], 'placeholder' => ''])

<select id="{{ $id }}" name="{{ $name ?? $id }}"
    {{ $attributes->merge(['class' => 'pr-10 border border-green-600 p-3 sm:p-4 block w-full rounded-lg sm:text-sm focus:outline-none disabled:opacity-50 disabled:pointer-events-none']) }}>
    <option selected disabled> {{ $placeholder }} </option>
    @foreach ($options as $value => $label)
        <option value=" {{ $value }} ">{{ $label }}</option>
    @endforeach --}}
