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
                    <x-breadcrumb-content label="View Assignment" />
                </ol>

                <x-content>
                    <!-- Card Section -->
                    <div class="py-2 sm:py-6 lg:px-6 mx-auto">
                        <!-- Card -->
                        <div class="bg-slate-100 rounded-xl shadow-xs p-4 sm:p-7">
                            <div class="mb-8">
                                <div class="sm:flex items-center">
                                    <div class="flex-1">
                                        <h2 class="text-xl font-bold text-gray-800 ">
                                            Assignment
                                        </h2>
                                        <p class="text-sm text-gray-600">
                                            Manage academic departments, their courses, staff, and related programs to
                                            support
                                            student learning and school operations.
                                        </p>
                                    </div>
                                    <div class="">
                                        <form
                                            action="{{ route('assignment.assignmentDelete', ['id' => $assignment->id]) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this assignment?');">
                                            @csrf
                                            @method('DELETE')
                                            <x-button-delete type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24" fill="currentColor" class="size-8 text-red-500">
                                                    <path
                                                        d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                                                    <path fill-rule="evenodd"
                                                        d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.133 2.845a.75.75 0 0 1 1.06 0l1.72 1.72 1.72-1.72a.75.75 0 1 1 1.06 1.06l-1.72 1.72 1.72 1.72a.75.75 0 1 1-1.06 1.06L12 15.685l-1.72 1.72a.75.75 0 1 1-1.06-1.06l1.72-1.72-1.72-1.72a.75.75 0 0 1 0-1.06Z"
                                                        clip-rule="evenodd" />
                                                </svg><span class="underline text-base text-red-500">Delete</span>
                                            </x-button-delete>
                                        </form>
                                    </div>
                                </div>
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
