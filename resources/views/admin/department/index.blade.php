<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Department | School Management</title>

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
                    <x-breadcrumb-before label="Department"><x-svg.users-icon /></x-breadcrumb-before>
                    <x-breadcrumb-content label="Add Department" />
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
                                    Manage academic departments, their courses, staff, and related programs to support
                                    student learning and school operations.
                                </p>
                                <div class="pt-4">
                                    <h2 class="text-xl font-bold text-gray-800 mb-2">
                                        {{-- {{ $department->department_name }} Subject --}}
                                    </h2>
                                </div>
                                <x-button-add class="text-white" ariaControl="add-department"
                                    dataOverlay="#add-department">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>Add Department</x-button-add>
                                @yield('department-index')
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Card Section -->
                    @if (session('success'))
                        <x-success-modal id="modal-confirm" :hsOverlay="'#modal-confirm'">
                            {{ session('success') }}
                        </x-success-modal>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const modal = document.querySelector('#modal-confirm');
                                if (modal && window.HSOverlay && typeof window.HSOverlay.open === 'function') {
                                    setTimeout(() => {
                                        window.HSOverlay.open(modal);
                                    }, 200);
                                }
                            });
                        </script>
                    @endif

                </x-content>
            </x-main-container>
        </x-partials.top-bar>
    </div>
    <x-partials.footer />
</body>

</html>
