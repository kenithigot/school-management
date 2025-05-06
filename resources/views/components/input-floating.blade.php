@props(['id', 'label', 'type' => 'text', 'name' => null])


<!-- Input Field -->
<input type="{{ $type ?? 'text' }}" id="{{ $id }}" name="{{ $name ?? $id }}" placeholder="{{ $label }}"
    {{ $attributes->merge([
        'class' => 'outline-hidden border border-green-600 peer p-3 sm:p-4 block w-full rounded-lg sm:text-sm placeholder:text-transparent disabled:opacity-50 disabled:pointer-events-none
                                                                                                focus:pt-6 focus:pb-2 focus:outline-none
                                                                                                not-placeholder-shown:pt-6 not-placeholder-shown:pb-2
                                                                                                autofill:pt-6 autofill:pb-2',
    ]) }}>

<!-- Label Field -->
<label for="{{ $id }}"
    class="absolute top-0 start-0 p-3 sm:p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none
    peer-focus:scale-90
    peer-focus:translate-x-0.5
    peer-focus:-translate-y-1.5
    peer-focus:text-gray-800
    peer-not-placeholder-shown:scale-90
    peer-not-placeholder-shown:translate-x-0.5
    peer-not-placeholder-shown:-translate-y-1.5
    peer-not-placeholder-shown:text-gray-800">{{ $label }}</label>


@if ($type === 'password')
    <button type="button"
        class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-green-500 rounded-e-md focus:outline-none"
        data-hs-toggle-password='{
            "target": "#{{ $id }}",
            "defaultClass": "fa-eye-slash", 
            "showClass": "fa-eye", 
            "activeIcon": "block",
            "inactiveIcon": "hidden"
        }'>
        <!-- Two icons (reversed) -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            <path fill-rule="evenodd"
                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                clip-rule="evenodd" />
        </svg>



    </button>
@endif
