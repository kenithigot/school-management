<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login | Kenncoi University</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-layout-theme>
        <!-- Grid -->
        <div class="grid items-center md:grid-cols-2">
            <div class="px-1 sm:p-2">
                <div
                    class="hidden sm:flex bg-linear-to-bl from-green-300 via-transparent rounded-tl-4xl rounded-sm px-10">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-24">
                </div>
                <!-- Title -->
                <x-login.login-title />
                <!-- End Title -->

                <!-- Blockquote -->
                <x-login.block-quote />
                <!-- End Blockquote -->

                <div class="hidden lg:block absolute right-42 lg:-translate-x-60 transform lg:-translate-y-62"
                    aria-hidden="true">
                    <x-login.svg-icon />
                </div>
            </div>
            <!-- Form -->
            <div>
                <div class="lg:max-w-lg lg:mx-auto lg:me-0 ms-auto">
                    <!-- Card -->
                    <div class="relative p-4 sm:p-7 flex flex-col bg-slate-100 rounded-2xl shadow-2xl z-20">
                        <div class="text-center pb-10">
                            <h1 class="block text-2xl font-bold text-gray-800">Login to Your Account</h1>
                            <p class="mt-2 text-sm text-gray-600">
                                Please enter your credentials to access your <span
                                    class="font-bold uppercase text-green-500">Kenncoi</span>
                                portal.
                            </p>
                        </div>
                        <div class="flex justify-end px-3 gap-4 pb-4">
                            <x-login.line-styling />
                        </div>
                        <div class="mt-5 px-3">
                            <div class="grid grid-cols-1 gap-4">
                                @yield('login-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form -->
        </div>
        <!-- End Grid -->
    </x-layout-theme>

    <!-- Logo Tab Section -->
    <x-logo-tab />
</body>

</html>
