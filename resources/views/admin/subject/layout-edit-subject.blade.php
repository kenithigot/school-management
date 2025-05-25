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
                                <h2 class="text-xl font-bold text-gray-800">
                                    Manage Subject
                                </h2>
                                <p class="text-sm text-gray-600">
                                    Allows administrators to add, edit, or remove academic subjects, assign them to
                                    specific classes or grade levels, and link subjects with designated teachers.
                                </p>
                                {{-- <div class="pt-4">
                                    <x-button-add class="text-white" ariaControl="add-subject"
                                        dataOverlay="#add-subject">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>Add Subject</x-button-add>
                                </div> --}}

                                <div class="pt-4">
                                    <h2 class="text-xl font-bold text-gray-800 mb-2">
                                        Department
                                    </h2>
                                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-6 md:gap-10">
                                        @foreach ($subjects->unique('department_id') as $subject)
                                            <!-- Card -->
                                            <div
                                                class="size-full bg-white shadow-lg border border-green-500 rounded-lg p-5">
                                                <div class="flex justify-between items-center gap-x-4 mb-3">
                                                    <div
                                                        class="inline-flex justify-center items-center size-15.5 rounded-full border-2 border-green-600 bg-blue-100">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="size-6 text-gray-800">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                                        </svg>
                                                    </div>
                                                    <div class="shrink-0">
                                                        <a
                                                            href="{{ route('subject.manageSubject', ['department' => $subject->department->id]) }}">
                                                            <div class="flex items-center gap-x-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="size-5 text-green-500">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                                                </svg>


                                                                <h4
                                                                    class="underline underline-offset-2 text-green-500 font-semibold">
                                                                    Manage</h4>
                                                            </div>

                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="shrink-0">
                                                    <h3 class="block text-lg font-semibold text-gray-800">
                                                        {{ $subject->department->department_name }}</h3>
                                                </div>
                                                <p class="text-gray-600">The simplest way to keep your
                                                    portfolio always up-to-date.</p>
                                            </div>
                                            <!-- End Card -->
                                        @endforeach
                                    </div>
                                </div>

                                @yield('modal-add-subject')
                            </div>
                            @yield('manage-subject')
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
