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
