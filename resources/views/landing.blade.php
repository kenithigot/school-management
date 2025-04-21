@extends('layouts.app')
@section('content')
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#333132] to-[#3ab61b] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-base/6 text-gray-600 ring-1 ring-green-500 hover:ring-green-600">
                    Start your journey with us — enroll today! <a href="#" class="font-semibold text-green-500">
                        <span class="absolute inset-0" aria-hidden="true"></span>Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">
                    Bright Future Academy</h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Empowering students to achieve
                    their full potential through academic and character development. Our dedicated approach
                    ensures that every student not only excels in their studies but also grows as a confident, responsible
                    individual ready to
                    take on the challenges of tomorrow.</p>
                <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-green-500 hover:bg-green-400 focus:bg-green-400 px-6 py-2.5 text-lg font-semibold text-white shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2">
                        Enroll Now</a>
                    <div class="hidden sm:flex">
                        <a href="#"
                            class="gap-x-3 inline-flex items-center rounded-md border-1 border-green-500 hover:bg-green-500 hover:text-white focus:bg-green-400 px-6 py-2.5 text-lg text-green-500 shadow-xs focus-visible:outline-2 focus-visible:outline-offset-2">
                            Guidelines <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#333132] to-[#3ab61b] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
    <div class="relative">
        <!-- Clients -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Title -->
            <div class=" text-center mb-6">
                <h2 class="text-xl font-semibold md:text-3xl md:leading-tight text-gray-800">Empowering Education Through
                    Meaningful Partnerships</h2>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div
                class="my-8 md:my-16 grid grid-cols-3 sm:grid-cols-3 lg:flex sm:justify-evenly gap-6 sm:gap-x-8 lg:gap-x-16">
                <!-- Partnership Logo -->
                <div class="shrink-0 transition hover:-translate-y-1 cursor-pointer flex justify-center">
                    <img src="{{ asset('images/logo1.png') }}" class="object-cover h-28 w-28 mx-auto sm:mx-0"
                        alt="School 1">
                </div>
                <div class="shrink-0 transition hover:-translate-y-1 cursor-pointer flex justify-center">
                    <img src="{{ asset('images/logo2.png') }}" class="object-cover h-28 w-28  mx-auto sm:mx-0"
                        alt="School 2">
                </div>
                <div class="shrink-0 transition hover:-translate-y-1 cursor-pointer flex justify-center">
                    <img src="{{ asset('images/logo3.png') }}" class="object-cover h-24 w-24  mx-auto sm:mx-0"
                        alt="School 3">
                </div>
                <div class="shrink-0 transition hover:-translate-y-1 cursor-pointer flex justify-center">
                    <img src="{{ asset('images/logo4.png') }}" class="object-cover h-28 w-28  mx-auto sm:mx-0"
                        alt="School 4">
                </div>
                <div class="shrink-0 transition hover:-translate-y-1 cursor-pointer flex justify-center">
                    <img src="{{ asset('images/logo5.png') }}" class="object-cover h-26 w-26  mx-auto sm:mx-0"
                        alt="School 5">
                </div>
                <div class="shrink-0 transition hover:-translate-y-1 cursor-pointer flex justify-center">
                    <img src="{{ asset('images/logo6.png') }}" class="object-cover h-26 w-26  mx-auto sm:mx-0"
                        alt="School 6">
                </div>
            </div>
            <!-- End Grid -->

            <!-- Grid -->
            <div class="grid grid-cols-12 sm:flex sm:justify-center gap-6 sm:gap-x-12 lg:gap-x-20">
                <div class="col-span-6 text-center">
                    <h4 class="text-xl md:text-4xl font-bold text-green-500">
                        25+
                    </h4>
                    <h4 class="text-sm md:text-md text-gray-600 font-semibold">
                        Local and International Partnership
                    </h4>
                </div>
                <!-- End Col -->

                <div class="col-span-6 text-center">
                    <h4 class="text-xl md:text-4xl font-bold text-green-500">
                        98%
                    </h4>
                    <h4 class="text-sm md:text-md text-gray-600 font-semibold">
                        Graduation Rate
                    </h4>
                </div>
                <!-- End Col -->

                <div class="col-start-4 col-span-6 text-center">
                    <h4 class="text-xl md:text-4xl font-bold text-green-500">
                        20+
                    </h4>
                    <h4 class="text-sm md:text-md text-gray-600 font-semibold">
                        National and Regional academic awards
                    </h4>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Clients -->
    </div>
    <div class="flex">
        <div class="flex-1">
            asdasd
        </div>
        <div class="flex-1 p-4">
            <!-- Slider -->
            <div data-hs-carousel='{
        "loadingClasses": "opacity-0",
        "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer",
        "isAutoPlay": true
      }'
                class="relative">
                <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
                    <div
                        class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-100 p-6 ">
                                <span class="self-center text-4xl text-gray-800 transition duration-700">First
                                    slide</span>
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-200 p-6">
                                <span class="self-center text-4xl text-gray-800 transition duration-700">Second
                                    slide</span>
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full bg-gray-300 p-6 ">
                                <span class="self-center text-4xl text-gray-800 transition duration-700">Third
                                    slide</span>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button"
                    class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-s-lg">
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>
                <button type="button"
                    class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-e-lg">
                    <span class="sr-only">Next</span>
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </span>
                </button>

                <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 gap-x-2"></div>
            </div>
            <!-- End Slider -->
        </div>
    </div>
@endsection
