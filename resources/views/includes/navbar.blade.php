<header class="fixed bg-white inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Logo Here</span>
                <img class="h-16 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button id="menuToggle" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex items-center lg:gap-x-12 ">
            <a href=""
                class="hover:bg-slate-100 hover:rounded-md px-1 text-base/6 font-semibold text-gray-900">Home</a>
            <a href="#"
                class="hover:bg-slate-100 hover:rounded-md px-1 text-base/6 font-semibold text-gray-900">Courses</a>
            <a href="#"
                class="hover:bg-slate-100 hover:rounded-md px-1 text-base/6 font-semibold text-gray-900">Services</a>
            <a href="#"
                class="hover:bg-slate-100 hover:rounded-md px-1 text-base/6 font-semibold text-gray-900">Contact</a>
            <a href="#"
                class="hover:bg-slate-100 hover:rounded-md px-1 text-base/6 font-semibold text-gray-900">Blog</a>
        </div>
        <div class="hidden lg:flex items-center lg:flex-1 lg:justify-end">
            <div class="px-4">
                <a href="" class="text-base/6 font-semibold text-gray-900">Sign
                    up <span aria-hidden="true"></a>
            </div>
            <div class="px-4">
                <a href=""
                    class= "gap-x-2 inline-flex items-center bg-green-500 hover:bg-green-400 focus:bg-green-400 py-2 px-4 rounded-md text-base/6 font-semibold text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    Log In
                </a>
            </div>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobileMenu" class="hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-16 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
                <button id="closeMenu" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6 text-center">
                        <a href=""
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Courses</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Services</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Contact</a>
                        <a href="#"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Blog</a>
                    </div>
                    <div class="h-[2px] w-full bg-green-500 rounded-lg"></div>
                    <div class="py-6 space-y-3">
                        <a href="#"
                            class="inline-flex w-full justify-center text-center rounded-lg px-4 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Sign
                            Up
                        </a>
                        <a href="#"
                            class="w-full gap-x-2 inline-flex items-center justify-center bg-green-500 hover:bg-green-400 focus:bg-green-400 py-2 rounded-lg px-4 text-base/7 font-semibold text-white ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            Log In
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
