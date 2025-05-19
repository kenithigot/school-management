@props(['for'])

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'inline-block text-gray-800']) }}>
    {{ $slot }}
</label>
