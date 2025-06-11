@extends('admin.assignment.layout-view-assignment')
{{-- @if (session('deleted'))
    <x-delete-modal id="subject-confirm" hsOverlay="#subject-confirm">
        {{ session(key: 'deleted') }}
    </x-delete-modal>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.querySelector('#subject-confirm');
            if (modal && window.HSOverlay && typeof window.HSOverlay.open === 'function') {
                setTimeout(() => {
                    window.HSOverlay.open(modal);
                }, 200);
            }
        });
    </script>
@endif --}}

@section('assignment-view')
    <!-- Icon Blocks -->
    <div class="pt-10 lg:pt-14 mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-stretch gap-4">
            @forelse ($assignments as $assignment)
                <!-- Icon Block -->
                <div class="h-full flex flex-col">
                    <div class="relative border border-green-500 px-4 py-6 rounded-md shadow-lg flex flex-col h-full bg-slate-200 hover:bg-slate-100">
                        <div
                            class="absolute right-0 top-0 text-xs text-white font-semibold shadow-md bg-red-600 px-2.5 py-1 rounded-tr-md rounded-bl-2xl">
                            Not Graded
                        </div>
                        <div
                            class="absolute left-[-8px] top-[-8px] text-white font-semibold border border-green-500 bg-green-500 px-1.5 py-[2px] rounded-md">
                            {{ $assignment->total_point . ' ' . ($assignment->total_point > 1 ? 'pts' : 'pt') }}
                        </div>
                        <h3 class="block text-[16px] font-semibold text-gray-800 my-2">{{ $assignment->assignment_title }}
                        </h3>

                        <div class="flex items-center justify-between text-sm font-medium text-gray-800 mt-2">
                            <span>
                                Issue Date:
                            </span>
                            {{ \Carbon\Carbon::parse($assignment->issue_date)->format('F j, Y g:i A') ?? 'No date specified' }}
                        </div>
                        <div class="flex items-center justify-between text-sm font-medium text-gray-800 mb-2">
                            <span>
                                Due Date:
                            </span>
                            {{ \Carbon\Carbon::parse($assignment->due_date)->format('F j, Y g:i A') ?? 'No date specified' }}
                        </div>

                        <span class="flex items-center gap-2 text-sm font-medium text-gray-800 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 flex-shrink-0">
                                <path
                                    d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                <path
                                    d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                <path
                                    d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                            </svg>

                            {{ $assignment->course->course_name ?? 'No course specified.' }}
                        </span>
                        @php
                            $yearLevels = [
                                1 => '1st Year',
                                2 => '2nd Year',
                                3 => '3rd Year',
                                4 => '4th Year',
                            ];
                        @endphp
                        <span class="flex items-center gap-2 text-sm font-medium text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 flex-shrink-0">
                                <path
                                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
                            </svg>

                            {{ $yearLevels[$assignment->year_level] ?? 'No year level specified.' }}
                        </span>
                        <span class="flex items-center gap-2 text-sm font-medium text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 flex-shrink-0">
                                <path
                                    d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
                            </svg>
                            {{ $assignment->subject->subject_name ?? 'No subject specified.' }}
                        </span>
                        <span class="flex items-center gap-2 text-sm font-medium text-gray-800 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-4 flex-shrink-0">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                    clip-rule="evenodd" />
                            </svg>
                            {{ $assignment->designatedTeacher->first_name ?? 'No teacher specified.' }}
                        </span>
                        <div class="absolute right-0 bottom-1 text-sm text-gray-800 font-semibold px-2.5 py-1">
                            <a href="{{ route('assignment.assignmentViewSpecific', ['id' => $assignment->id]) }}"
                                class="inline-flex items-center">
                                <div class="flex items-center gap-1 font-semibold text-sm text-green-600">
                                    view
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Icon Block -->
                @empty
                <div class="text-red-600 text-base">
                    No assignment recorded.
                </div>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $assignments->links() }}
        </div>
    </div>
@endsection
