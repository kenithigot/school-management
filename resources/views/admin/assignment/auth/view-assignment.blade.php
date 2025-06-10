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
            @foreach ($assignments as $assignment)
                <!-- Icon Block -->
                <div class="h-full flex flex-col">
                    <div class="relative border border-green-500 px-4 py-6 rounded-md shadow-lg flex flex-col h-full">
                        <div
                            class="absolute right-0 top-0 text-xs text-white font-semibold shadow-md bg-red-600 px-2.5 py-1 rounded-tr-md rounded-bl-2xl">
                            Not Graded
                        </div>
                        <div
                            class="absolute left-[-8px] top-[-10px] text-white font-semibold border border-green-500 bg-green-500 px-1.5 py-[2px] rounded-md">
                            {{ $assignment->total_point . ' ' . ($assignment->total_point > 1 ? 'pts' : 'pt') }}
                        </div>
                        <h3 class="block text-[16px] font-semibold text-gray-800 my-2">{{ $assignment->assignment_title }}
                        </h3>

                        <span class="block text-sm font-medium text-gray-800 mt-2">
                            {{ $assignment->course->course_name ?? 'No course specified.' }}
                        </span>
                        <span class="block text-sm font-medium text-gray-800">
                            {{ $assignment->year_level == 1
                                ? '1st Year'
                                : ($assignment->year_level == 2
                                    ? '2nd Year'
                                    : ($assignment->year_level == 3
                                        ? '3rd Year'
                                        : ($assignment->year_level == 4
                                            ? '4th Year'
                                            : 'No year level specified.'))) }}
                        </span>
                        <span class="block text-sm font-medium text-gray-800">
                            {{ $assignment->subject->subject_name ?? 'No subject specified.' }}
                        </span>
                        <div class="absolute right-0 bottom-1 text-sm text-gray-800 font-semibold px-2.5 py-1">
                            <a href="" class="inline-flex items-center">
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
            @endforeach
        </div>

        <div class="mt-6">
            {{ $assignments->links() }}
        </div>
    </div>
@endsection
