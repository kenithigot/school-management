@extends('admin.department.layout-report')
@if (session('deleted'))
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
@endif

@section('department-report')
    <!-- Icon Blocks -->
    <div class="py-10 lg:py-12 mx-auto">
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-8">

            @foreach ($departments as $department)
                <!-- Icon Block -->
                <div class="border px-4 py-6 border-green-500 rounded-md shadow-lg">
                    <div class="flex justify-between items-center">
                        <div
                            class="flex items-center justify-center size-12 bg-linear-to-br from-green-500 to-green-600 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="shrink-0 size-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                            </svg>
                        </div>
                        <div class="flex items center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>
                            <h3 class="text-xl font-semibold text-gray-800">{{$department->teachers_count}}</h3>
                        </div>
                    </div>
                    <div class="bg-linear-to-r from-gray-200 via-gray-50 to-transparent h-0.5 mt-6">
                        <div class="bg-gray-400 w-9 h-0.5"></div>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $department->department_name }}</h3>
                        <p class="mt-1 text-gray-600">{{ $department->description ?? 'No description.' }}</p>
                    </div>
                    <div class="mt-5 flex justify-between items-center">
                        <span class="block text-xs uppercase text-gray-500">Teachers</span>
                        <span class="block text-base font-medium text-gray-800">{{$department->teachers_count}}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="block text-xs uppercase text-gray-500">Students</span>
                        <span class="block text-base font-medium text-gray-800">$316.8</span>
                    </div>
                </div>
                <!-- End Icon Block -->
            @endforeach
        </div>
    </div>
    <!-- End Icon Blocks -->
@endsection
