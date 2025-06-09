<div>
    <div>
        <x-content-heading class="text-base">Filter Search:</x-content-heading>
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-4 mt-2">
            <div class="relative inline-flex">
                <x-select-filter id="department" wire:model.defer="selectedDepartment" placeholder="Department"
                    :options="$departments" />
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4 text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                </div>
            </div>
            <div class="relative inline-flex">
                <x-select-filter id="semester" wire:model.defer="selectedSemester" placeholder="Semester"
                    :options="$semesters" />
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4 text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                </div>
            </div>
            <div class="relative inline-flex">
                <x-select-filter id="yearLevel" wire:model.defer="selectedYearLevel" placeholder="Year level"
                    :options="$yearLevel" />
                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4 text-green-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                    </svg>
                </div>
            </div>
            @if ($selectedDepartment || $selectedSemester || $selectedYearLevel)
                <div class="relative">
                    <button wire:click="clearFilters"
                        class="cursor-pointer bg-green-600 hover:bg-green-700 text-white px-3 py-2 rounded-lg transition w-full sm:w-auto flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endif
        </div>

        <div class="flex gap-3 justify-end">
            <x-button-export wire:click='exportExcel'>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark-excel-fill" viewBox="0 0 16 16">
                    <path
                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M5.884 6.68 8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64" />
                </svg>
                Excel
            </x-button-export>
            <x-button-export wire:click='exportPdf'>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                    <path
                        d="M5.523 12.424q.21-.124.459-.238a8 8 0 0 1-.45.606c-.28.337-.498.516-.635.572l-.035.012a.3.3 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647q-.178.037-.356.078a21 21 0 0 0 .5-1.05 12 12 0 0 0 .51.858q-.326.048-.654.114m2.525.939a4 4 0 0 1-.435-.41q.344.007.612.054c.317.057.466.147.518.209a.1.1 0 0 1 .026.064.44.44 0 0 1-.06.2.3.3 0 0 1-.094.124.1.1 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 6.97c-.04.244-.108.524-.2.829a5 5 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.5.5 0 0 1 .145-.04c.013.03.028.092.032.198q.008.183-.038.465z" />
                    <path fill-rule="evenodd"
                        d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.7 11.7 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.86.86 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.84.84 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.8 5.8 0 0 0-1.335-.05 11 11 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.24 1.24 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a20 20 0 0 1-1.062 2.227 7.7 7.7 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103" />
                </svg>
                Pdf
            </x-button-export>
        </div>
    </div>

    <!-- Search and Per Page Controls -->
    <div class="sm:flex items-center justify-between py-4">
        <div class="mb-2 sm:mb-0 flex items-center justify-start">
            <label for="perPage" class="mr-2 font-semibold text-gray-800">Show</label>
            <select wire:model.live="perPage" id="perPage"
                class="py-1 px-1.5 border border-green-500 bg-white outline-none rounded-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <span class="ml-2 text-gray-700">entries</span>
        </div>

        <div class="relative sm:w-1/3">
            <livewire:components.search-input :value="$search" placeholder="Search..." />
            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                <svg class="size-4 text-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
            </div>
        </div>
    </div>
    <!-- Teachers Table -->
    <div wire:poll.10s class="rounded-lg overflow-x-auto">

        <table class="min-w-full">
            <thead class="border-y bg-green-500 border-gray-200">
                <tr class="text-white text-left">
                    <th class="py-3 px-3 font-semibold">No.</th>
                    <th class="py-3 px-3 font-semibold">Code</th>
                    <th class="py-3 px-3 font-semibold">Subject</th>
                    <th class="py-3 px-3 font-semibold">No. of Unit</th>
                    <th class="py-3 px-3 font-semibold">Semester</th>
                    <th class="py-3 px-3 font-semibold">Year Level</th>
                    <th class="py-3 px-3 font-semibold">Department</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($subjects as $subject)
                    <tr class="{{ $loop->odd ? 'bg-slate-200' : 'bg-gray-300' }} hover:bg-slate-100">
                        <td class="p-3 whitespace-nowrap">{{ $startingNumber + $loop->index }}</td>
                        <td class="p-3 whitespace-nowrap">
                            {{ $subject->subject_code }}
                        </td>
                        <td class="p-3 whitespace-nowrap">{{ $subject->subject_name }}</td>
                        <td class="p-3 whitespace-nowrap">
                            {{ $subject->units }} {{ $subject->units > 1 ? 'units' : 'unit' }}
                        </td>
                        <td class="p-3 whitespace-nowrap">
                            @if ($subject->semester == 1)
                                1st semester
                            @elseif($subject->semester == 2)
                                2nd semester
                            @else
                                {{ $subject->semester }} no data
                            @endif
                        </td>
                        <td class="p-3 whitespace-nowrap">
                            @if ($subject->year_level == 1)
                                1st year
                            @elseif($subject->year_level == 2)
                                2nd year
                            @elseif($subject->year_level == 3)
                                3rd year
                            @elseif($subject->year_level == 4)
                                4th year
                            @else
                                {{ $subject->year_level }} no data
                            @endif
                        </td>
                        <td class="p-3 whitespace-nowrap">
                            {{ $subject->department->department_name }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-10 p-4 text-center bg-white text-red-500">No data found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $subjects->links() }}
    </div>
</div>
