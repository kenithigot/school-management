@props(['id', 'name' => null, 'options' => [], 'placeholder' => '', 'value' => null])

<select id="{{ $id }}" name="{{ $name ?? $id }}"
    {{ $attributes->merge(['class' => 'pr-10 border border-green-600 p-3 sm:p-4 block w-full rounded-lg sm:text-sm focus:outline-none disabled:opacity-50 disabled:pointer-events-none']) }}>
    <option selected disabled>{{ $placeholder }}</option>
    @foreach ($options as $val => $label)
        <option value="{{ $val }}" {{ old($name ?? $id, $value) == $val ? 'selected' : '' }}>
            {{ $label }}
        </option>
    @endforeach
</select>
