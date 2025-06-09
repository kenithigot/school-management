@props(['id', 'hsOverlay', 'buttonLabel' => 'Confirm'])

<div id="{{ $id }}"
    class="hidden hs-overlay size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="{{ $id }}-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-md sm:w-full m-3 sm:mx-auto">
        <div class="flex flex-col bg-slate-100 border border-gray-200 shadow-2xs rounded-xl pointer-events-auto">
            <div class="flex justify-center pt-8">
                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check-circle-fill size-14 text-[#258249] bg-[#4ade80] rounded-full"
                    viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-x-circle-fill size-14 rounded-full text-[#b93131] bg-[#f05252]" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                </svg>
            </div>
            <div class="p-4 overflow-y-auto text-center">
                <p class="mt-1 text-gray-800 text-lg">
                    {{ $slot }}
                </p>
            </div>
            <div class="flex justify-center items-center gap-x-2 py-3 px-4">
                <button type="button"
                    class="cursor-pointer py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-hidden focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none"
                    data-hs-overlay="{{ $hsOverlay }}">
                    {{ $buttonLabel }}
                </button>
            </div>
        </div>
    </div>
</div>
