<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
</head>

<body>
    <div class="h-screen">
        <x-layout-theme>
            <div class="h-full flex justify-center items-center">
                <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-2xs w-full max-w-md">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800">Forgot password?</h1>
                            <p class="mt-7 text-sm text-gray-600">
                                Remember your password?
                                <a class="text-green-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium"
                                    href="{{ route('login') }}">
                                    Sign in here
                                </a>
                            </p>
                        </div>
                        @yield('content-auth-forgotPass')
                    </div>
                </div>
            </div>
        </x-layout-theme>
    </div>

    <div class="absolute bottom-0 w-full">
        <x-logo-tab />
    </div>

</body>

</html>
