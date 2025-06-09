<div>
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
                    <th class="py-3 px-3 font-semibold">Action</th>
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
                        <td class="p-3 whitespace-nowrap">
                            <div class="flex items-center gap-x-2">
                                <a href="{{ route('subject.editSubjectIndex', ['department' => $subject->department_id, 'id' => $subject->id]) }}"
                                    class="cursor-pointer text-green-600 hover:text-white border border-green-600 hover:bg-green-500 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-0 text-center">
                                    Edit
                                </a>
                                <form
                                    action="{{ route('subject.deleteSubject', [ $subject->id]) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this subject?');">
                                    @csrf
                                    @method('DELETE')
                                    <button tyype="submit"
                                        class="cursor-pointer text-red-600 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-0 text-center">
                                        Delete
                                    </button>
                                </form>
                            </div>
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
