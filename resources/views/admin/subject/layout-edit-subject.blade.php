<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage - Subject | School Management</title>

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
                    <x-breadcrumb-before label="Subjects"><x-svg.users-icon /></x-breadcrumb-before>
                    <x-breadcrumb-content label="Edit Subject" />
                </ol>

                <x-content>
                    <!-- Card Section -->
                    <div class="py-2 sm:py-6 lg:px-6 mx-auto">
                        <!-- Card -->
                        <div class="bg-slate-100 rounded-xl shadow-xs p-4 sm:p-7">
                            <div class="mb-8">
                                <div class="text-gray-800 mb-4">
                                    <div class="font-bold flex items-center justify-between gap-3">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="shrink-0 size-10 text-green-500">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                            <span class="text-xl">Edit Subject</span>
                                        </div>
                                        <h2 class="text-xl font-bold text-green-500">
                                            {{ $subject->subject_name }}
                                        </h2>
                                    </div>
                                    @yield('edit-subject')
                                </div>
                            </div>
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
