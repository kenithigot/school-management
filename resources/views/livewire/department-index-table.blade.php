<div>
    <!-- Search and Per Page Controls -->
    <div class="sm:flex items-center justify-between gap-2 mb-4">
        {{-- <div class="grow">
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
        </div> --}}
    </div>

    <!-- Teachers Table -->
    <div wire:poll.10s class="rounded-lg overflow-x-auto">
        <table class="min-w-full">
            <thead class="border-y bg-green-500 border-gray-200">
                <tr class="text-white text-left">
                    <th class="py-3 px-3 font-semibold">No.</th>
                    <th class="py-3 px-3 font-semibold">Department</th>
                    <th class="py-3 px-3 font-semibold">Description</th>
                    <th class="py-3 px-3 font-semibold">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($departments as $department)
                    <tr class="{{ $loop->odd ? 'bg-slate-200' : 'bg-gray-300' }} hover:bg-slate-100">
                        <td class="p-3 whitespace-nowrap">{{ $startingNumber + $loop->index }}</td>
                        <td class="p-3 whitespace-nowrap">
                            {{ $department->department_name }}
                        </td>
                        <td class="p-3 whitespace-nowrap">
                            {{ \Illuminate\Support\Str::limit($department->description, 50, '...') ?? 'No Description' }}
                        </td>
                        <td class="p-3 whitespace-nowrap">
                            <div class="flex items-center gap-x-2">
                                <a href="{{ route('department.departmentEdit', ['id' => $department->id, 'department_name' => $department->department_name]) }}"
                                    class="cursor-pointer text-green-600 hover:text-white border border-green-600 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-0 text-center">
                                    Edit
                                </a>
                                <form action="{{ route('department.departmentDelete', $department->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this subject?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="cursor-pointer text-red-600 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-0 text-center">
                                        Delete
                                    </button>
                                </form>
                            </div>
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
        {{ $departments->links() }}
    </div>

    <form method="POST">
        @csrf
        <x-modal-add modalId="edit-department" modalTitle="edit Department" dataOverlay="#edit-department"
            modalLabel="department-edit-label" buttonName="Edit Department" type="submit">
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-6 sm:px-2">
                <div class="sm:col-span-3">
                    <x-label label="Department" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <x-input-floating class="{{ $errors->has('department') ? 'border-red-500' : '' }}"
                                name="department" id="department" label="Department" placeholder="Department"
                                value="{{ old('department') }}" />
                            @error('department')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <x-label label="Description" />
                </div>
                <!-- End Col -->
                <div class="sm:col-span-9">
                    <div class="sm:flex">
                        <div class="relative w-full">
                            <div class="relative w-full">
                                <x-text-area :rows="4"
                                    class="{{ $errors->has('description') ? 'border-red-500' : '' }}"
                                    name="description" id="description" placeholder="Type Description...." />
                                @error('description')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </x-modal-add>
    </form>
</div>
