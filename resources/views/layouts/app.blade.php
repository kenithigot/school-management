<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Management</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <style>
        [x-cloak] { display: none !important; }
    </style>
    ...

</head>

<body class="bg-white">
    @include('components.loader')
    @include('includes.navbar')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')
    @include('includes.sticky')
    @livewireScripts
</body>
<script>
    // Smooth scroll to top
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    }
</script>
@vite('resources/js/animation.js')

</html>
