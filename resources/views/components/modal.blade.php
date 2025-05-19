@props(['modalTitle' => 'Modal Title', 'isModalOpen'])

@if ($isModalOpen)
    <div id="hs-large-modal"
        class="hs-overlay size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
            <div class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b border-gray-200">
                    <h3 id="hs-large-modal-label" class="font-bold text-gray-800">
                        {{ $modalTitle }}
                    </h3>
                    <button type="button"
                        class="cursor-pointer size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-hidden focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#hs-large-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <p class="mt-1 text-gray-800">
                        {{ $slot }}
                    </p>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-gray-200">
                    <button type="button" wire:click="closeModal"
                        class="cursor-pointer py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-green-500 bg-white text-green-500 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                        data-hs-overlay="#hs-large-modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif
