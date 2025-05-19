<div>
    <!-- Search and Per Page Controls -->
    <div class="sm:flex items-center justify-between gap-2 mb-4">
        <div class="grow">
            <div class="relative max-w-sm sm:max-w-xs w-full">
                <input type="text" wire:model.live.debounce.300ms="search"
                    class="py-1.5 sm:py-2 px-3 ps-9 block w-full border border-green-500 focus:border-green-600 shadow-2xs rounded-lg sm:text-sm focus:z-10 outline-none"
                    placeholder="Search...">
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

        <div class="flex items-center justify-end mt-3 sm:mt-0">
            <label for="perPage" class="mr-2 font-semibold text-gray-800">Show</label>
            <select wire:model.live="perPage" id="perPage"
                class="py-1 px-1.5 border border-green-500 bg-white outline-none rounded-lg">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
            <span class="ml-2 text-gray-700">entries</span>
        </div>
    </div>

    <!-- Teachers Table -->
    <div wire:poll.10s class="rounded-lg overflow-x-auto">
        <table class="min-w-full">
            <thead class="border-y bg-green-500 border-gray-200">
                <tr class="text-white text-left">
                    <th class="py-3 px-3 font-semibold">No.</th>
                    <th class="py-3 px-3 font-semibold">Name</th>
                    <th class="py-3 px-3 font-semibold">Gender</th>
                    <th class="py-3 px-3 font-semibold">Education</th>
                    <th class="py-3 px-3 font-semibold">Employment</th>
                    <th class="py-3 px-3 font-semibold">Status</th>
                    <th class="py-3 px-3 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($teachers as $teacher)
                    <tr class="{{ $loop->odd ? 'bg-slate-200' : 'bg-gray-300' }} hover:bg-slate-100">
                        <td class="p-3 whitespace-nowrap">{{ $startingNumber + $loop->index }}</td>
                        <td class="p-3 whitespace-nowrap">
                            {{ $teacher->first_name . ' ' . $teacher->middle_name . ' ' . $teacher->last_name }}
                        </td>
                        <td class="p-3 whitespace-nowrap">{{ $teacher->gender }}</td>
                        <td class="p-3 whitespace-nowrap">{{ $teacher->educational_qualification }}</td>
                        <td class="p-3 whitespace-nowrap">{{ $teacher->employment_type }}</td>
                        <td class="p-3 whitespace-nowrap">{{ $teacher->employment_status }}</td>
                        <td class="p-3 whitespace-nowrap">
                            <a href="{{ route('viewTeacherDetails', $teacher->id) }}"
                                class="cursor-pointer text-green-600 hover:text-white border border-green-600 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-0 text-center me-2 mb-2">
                                View
                            </a>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-10 p-4 text-center bg-white text-red-500">No teachers found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $teachers->links() }}
    </div>
    <div>
    </div>
</div>
