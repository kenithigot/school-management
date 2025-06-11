<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Assignment | School Management</title>

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
                    <x-breadcrumb-before label="Assignment"><x-svg.users-icon /></x-breadcrumb-before>
                    <x-breadcrumb-content label="Add Assignment" />
                </ol>

                <x-content>
                    <!-- Card Section -->
                    <div class="py-2 sm:py-6 lg:px-6 mx-auto">
                        <!-- Card -->
                        <div class="bg-slate-100 rounded-xl shadow-xs p-4 sm:p-7">
                            <a class="inline-flex items-center gap-x-1 text-sm text-gray-800 hover:text-green-600 focus:outline-hidden focus:text-green-600"
                                href="{{ route('assignment.assignmentView') }}">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15 18-6-6 6-6" />
                                </svg>
                                Back to home
                            </a>
                            <div class="mb-8">
                                <h2 class="text-xl font-bold text-gray-800 ">
                                    Assignment
                                </h2>
                                <p class="text-sm text-gray-600">
                                    Manage academic departments, their courses, staff, and related programs to support
                                    student learning and school operations.
                                </p>
                                @yield('assignment-viewSpecific')
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
