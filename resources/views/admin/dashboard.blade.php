<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | School Management</title>
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
            asdas
        </x-main-container>
    </x-partials.top-bar>
</body>

</html>
