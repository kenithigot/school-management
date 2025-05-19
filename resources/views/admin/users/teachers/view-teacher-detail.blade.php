<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View - Teacher | School Management</title>

    <!-- Vite Laravel Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">
    <div class="hs-overlay-body-open hs-overlay-body-open:overflow-hidden">
        {{-- SideBar --}}
        @include('components.partials.sidebar')
        {{-- End SideBar --}}
    </div>
    <div class="flex-1">
        <x-partials.top-bar>
            <x-main-container>
                <ol class="flex items-center whitespace-nowrap p-3 border-b border-slate-200">
                    <x-breadcrumb href="{{ route('dashboard') }}" label="Dashboard"><x-svg.home-icon /></x-breadcrumb>
                    <x-breadcrumb-before href="" label="Students"><x-svg.users-icon /></x-breadcrumb-before>
                    <x-breadcrumb-content label="Add Account" />
                </ol>

                <x-content>
                    <!-- Card Section -->
                    <div class="py-2 sm:py-6 lg:px-6 mx-auto flex-1">
                        <!-- Card -->
                        <div class="bg-slate-100 rounded-xl shadow-xs p-4 sm:p-7">
                            <div class="mb-8">
                                <a class="pb-4 inline-flex items-center gap-x-1 text-sm text-gray-800 hover:text-green-600 focus:outline-hidden focus:text-green-600"
                                    href="{{ route('viewTeacher') }}">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Back to home
                                </a>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h2 class="text-xl font-bold text-gray-800">
                                            Teacher <span class=" text-green-600">{{ $teacher->first_name }}'s</span>
                                            details
                                        </h2>
                                        <p class="text-sm text-gray-600 mb-3">Provides detailed information about a
                                            teacher's
                                            profile.
                                        </p>
                                    </div>
                                    <dl class="flex flex-col sm:flex-row gap-x-3 text-base">
                                        <dt class="min-w-28 max-w-50 text-gray-600">
                                            ID number:
                                        </dt>
                                        <dd class="font-medium text-gray-800 ">
                                            {{ $teacher->teacher_id }}
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            @yield('teacher-view-detail')
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Card Section -->
                </x-content>
            </x-main-container>
        </x-partials.top-bar>
    </div>
    <x-partials.footer />
</body>

</html>
