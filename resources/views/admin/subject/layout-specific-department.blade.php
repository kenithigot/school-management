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
                    <x-breadcrumb-content label="Manage Subject" />
                </ol>

                <x-content>
                    <!-- Card Section -->
                    <div class="py-2 sm:py-6 lg:px-6 mx-auto">
                        <!-- Card -->
                        <div class="bg-slate-100 rounded-xl shadow-xs p-4 sm:p-7">
                            <div class="mb-8">
                                <h2 class="text-xl font-bold text-gray-800 ">
                                    Department
                                </h2>
                                <p class="text-sm text-gray-600">
                                    Allows administrators to add, edit, or remove academic subjects, assign them to
                                    specific classes or grade levels, and link subjects with designated teachers.
                                </p>
                                <div class="pt-4">
                                    <h2 class="text-xl font-bold text-gray-800 mb-2">
                                        {{ $department->department_name }} Subject
                                    </h2>
                                </div>
                                @yield('department-subject')
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
