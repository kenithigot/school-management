<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher - Add Account | School Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="hs-overlay-body-open hs-overlay-body-open:overflow-hidden">
        {{-- SideBar --}}
        @include('components.partials.sidebar')
        {{-- End SideBar --}}
    </div>
    <x-partials.top-bar>
        <x-main-container>
            <ol class="flex items-center whitespace-nowrap p-3 border-b border-slate-200">
                <x-breadcrumb href="{{ route('dashboard') }}" label="Dashboard"><x-svg.home-icon /></x-breadcrumb>
                <x-breadcrumb-before href="" label="Students"><x-svg.users-icon /></x-breadcrumb-before>
                <x-breadcrumb-content label="Add Account" />
            </ol>

            <x-content>
                <!-- Card Section -->
                <div class="py-2 sm:py-6 lg:px-6 mx-auto"><!-- Card -->
                    <div class="bg-white rounded-xl shadow-xs p-4 sm:p-7">
                        <div class="mb-8">
                            <h2 class="text-xl font-bold text-gray-800">
                                Teacher Account
                            </h2>
                            <p class="text-sm text-gray-600">
                                Create a new teacher account and  gain system access to manage classes, attendance, and student interactions.
                            </p>
                        </div>
                        @yield('register-teacher')
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Card Section -->
            </x-content>
        </x-main-container>
    </x-partials.top-bar>

</body>

</html>
