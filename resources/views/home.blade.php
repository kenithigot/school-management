@extends('layouts.app')
@section('content')
    <div id="mainContent">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
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
                    <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Empowering students to
                        achieve
                        their full potential through academic and character development. Our dedicated approach
                        ensures that every student not only excels in their studies but also grows as a confident,
                        responsible
                        individual ready to
                        take on the challenges of tomorrow.</p>
                    <div
                        class="animate-fade-section opacity-0 translate-y-5 transition-all duration-1000 mt-10 flex flex-col sm:flex-row items-center justify-center gap-x-6">
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
                <div id="p" class="block"></div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#333132] to-[#3ab61b] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>

        </div>
        <div class="relative">
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:pt-14 pb-4 lg:pb-8 mx-auto">
                <!-- Title -->
                <div class="text-center mb-6">
                    <h2 id="scrollHeading"
                        class="opacity-0 translate-y-10 transition-all duration-700 ease-in-out text-xl font-semibold md:text-3xl md:leading-tight text-gray-800">
                        Empowering Education Through Meaningful Partnerships
                    </h2>
                </div>
                <!-- End Title -->

                <!-- Grid -->
                <div
                    class="my-8 md:my-16 grid grid-cols-3 sm:grid-cols-3 lg:flex sm:justify-evenly gap-6 sm:gap-x-8 lg:gap-x-16">
                    <!-- Repeat this logo block -->
                    <x-logo-partners src="{{ asset('images/logo1.png') }}" alt="partnership 1"></x-logo-partners>
                    <x-logo-partners src="{{ asset('images/logo2.png') }}" alt="partnership 2"></x-logo-partners>
                    <x-logo-partners src="{{ asset('images/logo3.png') }}" alt="partnership 3"></x-logo-partners>
                    <x-logo-partners src="{{ asset('images/logo4.png') }}" alt="partnership 4"></x-logo-partners>
                    <x-logo-partners src="{{ asset('images/logo5.png') }}" alt="partnership 5"></x-logo-partners>
                    <x-logo-partners src="{{ asset('images/logo6.png') }}" alt="partnership 6"></x-logo-partners>
                </div>
                <!-- End Grid -->

                <!-- Grid -->
                <div
                    class="grid grid-cols-12 sm:flex sm:justify-center gap-6 sm:gap-x-12 lg:gap-x-20 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
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
        </div>
        <!-- Features -->
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto pb-6 sm:pb-16">
            <!-- Grid -->
            <div class="mt-5 lg:mt-16 grid lg:grid-cols-3 gap-8 lg:gap-12">
                <div class="lg:col-span-1 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                    <h2 class="font-bold text-2xl md:text-3xl text-gray-800">
                        Why Partner With Us?
                    </h2>
                    <p class="mt-2 md:mt-4 text-gray-600 text-justify sm:text-left">
                        At <span class="font-bold uppercase text-green-600">Kenncoi</span>, your partnership is more than
                        just
                        support — it's a catalyst for real change. By
                        collaborating with us, you become part of a powerful network focused on making lasting impact
                        through
                        education. Together, we can enrich learning experiences, expand opportunities, and uplift entire
                        communities.
                    </p>
                </div>
                <!-- End Col -->

                <div class="lg:col-span-2 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                    <div class="grid sm:grid-cols-2 gap-8 md:gap-12">
                        <!-- Icon Block -->
                        <div class="flex gap-x-5">
                            <svg class="shrink-0 mt-1 size-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path fill="#22c55e"
                                    d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3l0-84.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5l0 21.5c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-26.8C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112l32 0c24 0 46.2 7.5 64.4 20.3zM448 416l0-21.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176l32 0c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2l0 26.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3l0-84.7c-10 11.3-16 26.1-16 42.3zm144-42.3l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2l0 42.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-42.8c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112l32 0c61.9 0 112 50.1 112 112z" />
                            </svg>
                            <x-block-partners label="Community Impact">
                                Join us in shaping the next generation of leaders and innovators.
                            </x-block-partners>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="flex gap-x-5">
                            <svg class="shrink-0 mt-1 size-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#22c55e"
                                    d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75l-8.7 0-32 0-96 0c-35.3 0-64 28.7-64 64l0 96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-128 8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-147.6c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4L480 32zm-64 76.7L416 240l0 131.3C357.2 317.8 280.5 288 200.7 288l-8.7 0 0-96 8.7 0c79.8 0 156.5-29.8 215.3-83.3z" />
                            </svg>
                            <x-block-partners label="Shared Values">
                                Align your organization with our mission for quality, inclusive, and future-ready education.
                            </x-block-partners>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="flex gap-x-5">
                            <svg class="shrink-0 mt-1 size-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="#22c55e"
                                    d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                            </svg>
                            <x-block-partners label="Visibility & Recognition">
                                Gain exposure within our community and across our digital platforms.
                            </x-block-partners>
                        </div>
                        <!-- End Icon Block -->

                        <!-- Icon Block -->
                        <div class="flex gap-x-5">
                            <svg class="shrink-0 mt-1 size-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="#22c55e"
                                    d="M272 384c9.6-31.9 29.5-59.1 49.2-86.2c0 0 0 0 0 0c5.2-7.1 10.4-14.2 15.4-21.4c19.8-28.5 31.4-63 31.4-100.3C368 78.8 289.2 0 192 0S16 78.8 16 176c0 37.3 11.6 71.9 31.4 100.3c5 7.2 10.2 14.3 15.4 21.4c0 0 0 0 0 0c19.8 27.1 39.7 54.4 49.2 86.2l160 0zM192 512c44.2 0 80-35.8 80-80l0-16-160 0 0 16c0 44.2 35.8 80 80 80zM112 176c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-61.9 50.1-112 112-112c8.8 0 16 7.2 16 16s-7.2 16-16 16c-44.2 0-80 35.8-80 80z" />
                            </svg>
                            <x-block-partners label="Hands-On Engagement">
                                Participate in school activities, mentorship programs, and collaborative events.
                            </x-block-partners>
                        </div>
                        <!-- End Icon Block -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Features -->
        <div class="lg:flex pb-8">

            <div
                class="flex-1 px-4 sm:px-8 py-4 sm:order-2 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                <!-- Slider -->
                <div data-hs-carousel='{
        "loadingClasses": "opacity-0",
        "dotsItemClasses": "hs-carousel-active:bg-green-500 hs-carousel-active:border-green-500 size-3 border border-gray-400 rounded-full cursor-pointer",
        "isAutoPlay": true
      }'
                    class="relative">
                    <div class="hs-carousel relative overflow-hidden w-full min-h-58 sm:min-h-96 bg-white rounded-lg">
                        <div
                            class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                            <x-image-carousel src="{{ asset('images/carousel1.jpg') }}" alt="Carousel 1" />
                            <x-image-carousel src="{{ asset('images/carousel2.jpg') }}" alt="Carousel 2" />
                            <x-image-carousel src="{{ asset('images/carousel3.jpg') }}" alt="Carousel 3" />
                        </div>
                    </div>

                    <button type="button"
                        class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-s-lg">
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button type="button"
                        class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-e-lg">
                        <span class="sr-only">Next</span>
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </span>
                    </button>

                    <div
                        class="hidden sm:flex hs-carousel-pagination justify-center absolute bottom-3 start-0 end-0 gap-x-2">
                    </div>
                </div>
                <!-- End Slider -->
            </div>
            <div class="flex-1 sm:order-1">
                <div class="sm:p-6 px-4 sm:px-8 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                    <h2
                        class="text-2xl font-bold md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight text-green-500">
                        Together, We Can Shape Futures
                    </h2>
                    <p class="mt-5 text-gray-600 text-justify sm:text-left">
                        Behind every number is a story — a student who discovered their potential, a teacher who went the
                        extra
                        mile, and a community that believed in the power of education. These achievements are not just ours;
                        they belong to every partner who dared to dream with us.
                    </p>
                    <p class="mt-5 text-gray-600 text-justify sm:text-left">
                        At <span class="font-bold uppercase text-green-600">Kenncoi</span>, we don't just educate — we
                        ignite
                        passion, nurture curiosity, and open doors to
                        endless possibilities. But we can't do it alone.
                    </p>
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Approach -->
        <div class="bg-green-700">
            <!-- Approach -->
            <div class="max-w-5xl px-4 xl:px-0 py-10 lg:pt-20 lg:pb-20 mx-auto">
                <!-- Title -->
                <div class="max-w-3xl mb-10 lg:mb-14 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                    <h2 class="text-white font-semibold text-2xl md:text-4xl md:leading-tight">Opportunities for
                        Partnership
                    </h2>
                    <p class="mt-1 text-neutral-300">Explore a wide range of ways to get involved and make a lasting
                        impact.
                        Whether you're supporting academic success or enhancing learning environments, there’s a partnership
                        opportunity that fits your vision.</p>
                </div>
                <!-- End Title -->

                <!-- Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 lg:items-center">
                    <div
                        class="aspect-w-16 aspect-h-9 lg:aspect-none animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                        <img class="w-full object-cover rounded-xl" src="{{ asset('images/partnership.jpg') }}"
                            alt="Features Image">
                    </div>
                    <!-- End Col -->

                    <div>
                        <x-items-content span="Scholarships & Financial Support – ">Help deserving students access quality
                            education through direct financial aid.</x-items-content>
                        <x-items-content span="Learning Materials & Resources – ">Provide essential tools like textbooks,
                            school supplies, and digital content.</x-items-content>
                        <x-items-content span="Event Sponsorships – ">Support events that celebrate achievement,
                            creativity, and community spirit.</x-items-content>
                        <x-items-content span="Technology & Innovation Projects – ">Contribute to STEM initiatives and
                            equip students with future-ready skills.</x-items-content>
                        <x-items-content span="Internships & Career Guidance – ">Offer mentorship, internships, and career
                            talks to prepare students for the real world.</x-items-content>
                        <x-items-content span="Infrastructure Development – ">Fund the construction or renovation of
                            learning spaces to create better environments for
                            growth.</x-items-content>

                        <div class="animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                            <a class="transition hover:translate-x-1 group inline-flex items-center gap-x-2 py-2.5 px-6 bg-green-500 hover:bg-green-400 focus:bg-green-400 font-medium text-sm text-white sm:text-neutral-100 rounded-xl focus:outline-hidden"
                                href="#">
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <path fill="#ffffff"
                                        d="M323.4 85.2l-96.8 78.4c-16.1 13-19.2 36.4-7 53.1c12.9 17.8 38 21.3 55.3 7.8l99.3-77.2c7-5.4 17-4.2 22.5 2.8s4.2 17-2.8 22.5l-20.9 16.2L512 316.8 512 128l-.7 0-3.9-2.5L434.8 79c-15.3-9.8-33.2-15-51.4-15c-21.8 0-43 7.5-60 21.2zm22.8 124.4l-51.7 40.2C263 274.4 217.3 268 193.7 235.6c-22.2-30.5-16.6-73.1 12.7-96.8l83.2-67.3c-11.6-4.9-24.1-7.4-36.8-7.4C234 64 215.7 69.6 200 80l-72 48 0 224 28.2 0 91.4 83.4c19.6 17.9 49.9 16.5 67.8-3.1c5.5-6.1 9.2-13.2 11.1-20.6l17 15.6c19.5 17.9 49.9 16.6 67.8-2.9c4.5-4.9 7.8-10.6 9.9-16.5c19.4 13 45.8 10.3 62.1-7.5c17.9-19.5 16.6-49.9-2.9-67.8l-134.2-123zM16 128c-8.8 0-16 7.2-16 16L0 352c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-224-80 0zM48 320a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM544 128l0 224c0 17.7 14.3 32 32 32l32 0c17.7 0 32-14.3 32-32l0-208c0-8.8-7.2-16-16-16l-80 0zm32 208a16 16 0 1 1 32 0 16 16 0 1 1 -32 0z" />
                                </svg>
                                Partner With Us Today
                            </a>
                        </div>
                    </div>
                    <!-- End Timeline -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- Testimonials -->
            <div class="overflow-hidden">
                <div class="relative max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <!-- Title -->
                    <div
                        class="w-full mb-6 sm:mb-10 md:mb-16 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl text-white font-semibold">
                            Voices of Our Students <span class="italic text-lg sm:text-xl lg:text-2xl">Real Stories. Real
                                Success.</span>
                        </h2>
                        <p class="mt-1 text-neutral-300">Hear from the students who’ve walked our halls, challenged
                            themselves,
                            and thrived. At <span class="font-bold uppercase text-white">Kenncoi</span>, every journey is
                            unique—and every voice matters.</p>
                    </div>
                    <!-- End Title -->

                    <!-- Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <x-card-content>
                            <x-card-comment>
                                " The professors genuinely care about your growth. I landed my dream internship at a
                                Fortune 500 company! "
                            </x-card-comment>
                            <x-card-commentor src="{{ asset('images/testimonial.png') }}" label="Kenith S. Igot">
                                Student Organization Leader | WebDev
                            </x-card-commentor>
                        </x-card-content>

                        <x-card-content>
                            <x-card-comment>
                                " Joining <span class="font-bold uppercase text-green-500">Kenncoi</span> was the
                                best
                                decision I ever made. The support system here is unmatched."
                            </x-card-comment>
                            <x-card-commentor src="{{ asset('images/testimonial.png') }}" label="Kenith S. Igot">
                                Student Organization Leader | WebDev
                            </x-card-commentor>
                        </x-card-content>

                        <x-card-content>
                            <x-card-comment>
                                " The professors genuinely care about your growth. I landed my dream internship at a
                                Fortune 500 company! "
                            </x-card-comment>
                            <x-card-commentor src="{{ asset('images/testimonial.png') }}" label="Kenith S. Igot">
                                Student Organization Leader | WebDev
                            </x-card-commentor>
                        </x-card-content>
                    </div>
                    <!-- End Grid -->

                    <!-- Grid -->
                    <div class="animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                        <div class="mt-12 sm:mt-20 grid gap-6 grid-cols-2 sm:gap-12 lg:grid-cols-3 lg:gap-8">
                            <x-card-stats h4="In Scholarships Awarded" span="$20M+">
                                Every academic year
                            </x-card-stats>

                            <x-card-stats h4="Student Clubs & Organizations" span="120+">
                                Thriving extracurricular life
                            </x-card-stats>

                            <x-card-stats h4="Highly qualified faculty members" span="400+">
                                Passionate mentors committed to student success
                            </x-card-stats>
                        </div>
                    </div>
                    <!-- End Grid -->

                    <!-- SVG Element -->
                    <div>
                        <x-svg-icon-home />
                    </div>
                    <div id="c" class="relative">
                    </div>
                    <!-- End SVG Element -->
                </div>
            </div>
            <!-- End Testimonials -->

            <!-- Features -->

            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="pb-10 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                    <h2
                        class="text-center text-2xl font-bold md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight text-white">
                        Explore Our Academic Programs
                    </h2>
                </div>
                <!-- Tab Nav -->
                <div class="animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                    <nav class="mx-auto flex flex-col sm:flex-row gap-y-px sm:gap-y-0 bg-white" aria-label="Tabs"
                        role="tablist" aria-orientation="horizontal">

                        <x-button-tab-nav class="active" id="tabs-with-card-item-1" dataTab="#tabs-with-card-1"
                            ariaControl="tabs-with-card-1" span="Business & Management">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="shrink-0 hidden sm:block size-8 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>
                        </x-button-tab-nav>

                        <x-button-tab-nav id="tabs-with-card-item-2" dataTab="#tabs-with-card-2"
                            ariaControl="tabs-with-card-2" span="Social Science">
                            <svg class="shrink-0 hidden sm:block size-8" height="200px" width="200px" version="1.1"
                                id="_x32_" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">

                                    <g>
                                        <path style="fill:#4CAF50"
                                            d="M256.001,118.244c32.648,0,59.126-26.47,59.126-59.118S288.65,0,256.001,0s-59.118,26.477-59.118,59.126 S223.353,118.244,256.001,118.244z">
                                        </path>
                                        <path style="fill:#4CAF50"
                                            d="M256.001,228.204c40.613,0,82.205-14.063,75.715-52.998c-2.643-15.812-15.718-37.977-25.65-47.901 c-1.286-1.278-7.108-1.612-8.69-0.632c-12.052,7.434-26.202,11.768-41.376,11.768c-15.166,0-29.316-4.334-41.367-11.768 c-1.583-0.98-7.406-0.646-8.691,0.632c-9.924,9.924-23.014,32.089-25.65,47.901C173.803,214.142,215.396,228.204,256.001,228.204z">
                                        </path>
                                        <path style="fill:#4CAF50"
                                            d="M95.685,402.046c32.648,0,59.126-26.47,59.126-59.118c0-32.656-26.477-59.126-59.126-59.126 s-59.119,26.47-59.119,59.126C36.567,375.576,63.037,402.046,95.685,402.046z">
                                        </path>
                                        <path style="fill:#4CAF50"
                                            d="M145.75,411.114c-1.285-1.293-7.107-1.612-8.69-0.639c-12.059,7.434-26.201,11.762-41.375,11.762 c-15.173,0-29.316-4.327-41.368-11.762c-1.583-0.972-7.413-0.654-8.697,0.639c-9.925,9.917-23.007,32.082-25.642,47.894 C13.487,497.944,55.08,512,95.685,512c40.613,0,82.206-14.056,75.714-52.992C168.758,443.196,155.675,421.031,145.75,411.114z">
                                        </path>
                                        <path style="fill:#4CAF50"
                                            d="M416.314,402.046c32.648,0,59.118-26.47,59.118-59.118c0-32.656-26.47-59.126-59.118-59.126 s-59.126,26.47-59.126,59.126C357.189,375.576,383.666,402.046,416.314,402.046z">
                                        </path>
                                        <path style="fill:#4CAF50"
                                            d="M492.022,459.008c-2.636-15.812-15.718-37.977-25.642-47.894c-1.286-1.293-7.115-1.612-8.698-0.639 c-12.052,7.434-26.194,11.762-41.368,11.762c-15.173,0-29.316-4.327-41.375-11.762c-1.583-0.972-7.405-0.654-8.69,0.639 c-9.924,9.917-23.003,32.082-25.646,47.894C334.113,497.944,375.701,512,416.314,512C456.92,512,498.512,497.944,492.022,459.008z">
                                        </path>
                                        <path style="fill:#4CAF50"
                                            d="M336.24,370.973l-70.488-40.692v-81.385c0-5.387-4.363-9.75-9.75-9.75c-5.38,0-9.743,4.363-9.743,9.75v81.385 l-70.488,40.692c-4.66,2.693-6.265,8.662-3.572,13.322c2.694,4.662,8.661,6.258,13.322,3.572l70.48-40.7l70.488,40.692 c4.661,2.694,10.622,1.097,13.315-3.565C342.498,379.635,340.9,373.666,336.24,370.973z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </x-button-tab-nav>

                        <x-button-tab-nav id="tabs-with-card-item-3" dataTab="#tabs-with-card-3"
                            ariaControl="tabs-with-card-3" span="Technology & Engineering">
                            <svg class="shrink-0 hidden sm:block size-8" viewBox="-2.84 0 512 512"
                                xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g data-name="Layer 2" id="Layer_2">
                                        <g data-name="E404, gear, Media, media player, multimedia"
                                            id="E404_gear_Media_media_player_multimedia">
                                            <path class="cls-1"
                                                style="fill:none;stroke:#4CAF50;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;"
                                                d="M373.59,340.89V299.52a18.84,18.84,0,0,0-18.84-18.84H333.48A18.92,18.92,0,0,1,316,268.91l-.1-.24a19,19,0,0,1,4-20.71l15-15a18.83,18.83,0,0,0,0-26.64L305.72,177a18.83,18.83,0,0,0-26.64,0l-15,15a19,19,0,0,1-20.71,4l-.24-.1a18.92,18.92,0,0,1-11.77-17.46V157.25a18.84,18.84,0,0,0-18.84-18.84H171.11a18.84,18.84,0,0,0-18.84,18.84v21.27A18.92,18.92,0,0,1,140.5,196l-.24.1a19,19,0,0,1-20.71-4l-15-15a18.83,18.83,0,0,0-26.64,0L48.62,206.28a18.83,18.83,0,0,0,0,26.64l15,15a19,19,0,0,1,4,20.71l-.1.24a18.92,18.92,0,0,1-17.46,11.77H28.84A18.84,18.84,0,0,0,10,299.52v41.37a18.84,18.84,0,0,0,18.84,18.84H50.11A18.92,18.92,0,0,1,67.57,371.5l.1.24a19,19,0,0,1-4,20.71l-15,15a18.83,18.83,0,0,0,0,26.64l29.25,29.25a18.83,18.83,0,0,0,26.64,0l15-15a19,19,0,0,1,20.71-4l.24.1a18.92,18.92,0,0,1,11.77,17.46v21.27A18.84,18.84,0,0,0,171.11,502h41.37a18.84,18.84,0,0,0,18.84-18.84V461.89a18.92,18.92,0,0,1,11.77-17.46l.24-.1a19,19,0,0,1,20.71,4l15,15a18.83,18.83,0,0,0,26.64,0L335,434.13a18.83,18.83,0,0,0,0-26.64l-15-15a19,19,0,0,1-4-20.71l.1-.24a18.92,18.92,0,0,1,17.46-11.77h21.27A18.84,18.84,0,0,0,373.59,340.89Z">
                                            </path>
                                            <circle class="cls-1"
                                                style="fill:none;stroke:#4CAF50;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;"
                                                cx="191.8" cy="320.2" r="74.8"></circle>
                                            <path class="cls-1"
                                                style="fill:none;stroke:#4CAF50;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;"
                                                d="M207.45,138.41V138a15,15,0,0,1,15-15h16.9a15,15,0,0,0,13.88-9.35c0-.06.05-.13.08-.19A15.06,15.06,0,0,0,250.09,97l-12-11.94a15,15,0,0,1,0-21.17l23.24-23.24a15,15,0,0,1,21.16,0l11.95,12a15.07,15.07,0,0,0,16.45,3.18l.19-.08a15,15,0,0,0,9.36-13.88V25a15,15,0,0,1,15-15h32.87a15,15,0,0,1,15,15v16.9a15,15,0,0,0,9.35,13.88l.18.08a15.09,15.09,0,0,0,16.46-3.18l12-12a15,15,0,0,1,21.16,0l23.24,23.24a15,15,0,0,1,0,21.17L453.68,97a15.05,15.05,0,0,0-3.17,16.46l.07.19A15,15,0,0,0,464.45,123h16.9a15,15,0,0,1,15,15v32.86a15,15,0,0,1-15,15h-16.9a15,15,0,0,0-13.87,9.36l-.07.18a15,15,0,0,0,3.17,16.46l11.95,11.95a15,15,0,0,1,0,21.16l-23.24,23.24a15,15,0,0,1-21.16,0l-12-11.95a15,15,0,0,0-16.46-3.18l-.18.07A15,15,0,0,0,383.29,267v16.9a15,15,0,0,1-9.77,14">
                                            </path>
                                            <circle class="cls-1"
                                                style="fill:none;stroke:#4CAF50;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;"
                                                cx="351.88" cy="154.43" r="48.69"></circle>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </x-button-tab-nav>

                        <x-button-tab-nav id="tabs-with-card-item-4" dataTab="#tabs-with-card-4"
                            ariaControl="tabs-with-card-4" span="Education">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="shrink-0 hidden sm:block size-8 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                        </x-button-tab-nav>

                        <x-button-tab-nav id="tabs-with-card-item-5" dataTab="#tabs-with-card-5"
                            ariaControl="tabs-with-card-5" span="Criminology">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="shrink-0 hidden sm:block size-8 text-green-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </x-button-tab-nav>
                    </nav>
                </div>
                <!-- End Tab Nav -->

                <!-- Tab Content -->
                <div class="mt-12 md:mt-16">
                    <x-list-tab-content id="tabs-with-card-1" ariaLabel="tabs-with-card-item-1">
                        <!-- Devices -->
                        <div class="max-w-[1140px] lg:pb-32 relative">
                            <!-- Mobile Device -->
                            <x-figure-program src="{{ asset('images/program1.jpg') }}" />
                            <!-- End Mobile Device -->

                            <!-- Browser Device -->
                            <figure
                                class="bg-green-500 p-[2px] ms-auto me-20 relative z-1 max-w-full w-3xl h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] rounded-lg">

                                <div class="bg-gray-100 rounded-lg">
                                    <div class="max-w-full sm:h-92 rounded-b-lg px-4 py-6 sm:py-16 sm:px-12">
                                        <ul class="space-y-3 text-sm">
                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Business Administration (BBA)
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Science in Accountancy (BSA)
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Entrepreneurship
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Master of Business Administration (MBA)
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Master in Human Resource Management
                                                </x-list-programs-span>
                                            </x-list-programs>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                            <!-- End Browser Device -->
                        </div>
                        <!-- End Devices -->
                    </x-list-tab-content>

                    <x-list-tab-content class="hidden" id="tabs-with-card-2" ariaLabel="tabs-with-card-item-2">
                        <!-- Devices -->
                        <div class="max-w-[1140px] lg:pb-32 relative">
                            <!-- Mobile Device -->
                            <x-figure-program src="{{ asset('images/program2.jpg') }}" />
                            <!-- End Mobile Device -->

                            <!-- Browser Device -->
                            <figure
                                class="bg-green-500 p-[2px] ms-auto me-20 relative z-1 max-w-full w-3xl h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] rounded-lg">

                                <div class="bg-gray-100 rounded-lg">
                                    <div class="max-w-full sm:h-92 rounded-b-lg px-4 py-6 sm:py-16 sm:px-12">
                                        <ul class="space-y-3 text-sm">
                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Arts in Psychology
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Arts in Sociology
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Political Science
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Master of Psychology – Clinical & Counseling
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Master of Public Administration
                                                </x-list-programs-span>
                                            </x-list-programs>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                            <!-- End Browser Device -->
                        </div>
                        <!-- End Devices -->
                    </x-list-tab-content>

                    <x-list-tab-content class="hidden" id="tabs-with-card-3" ariaLabel="tabs-with-card-item-3">
                        <!-- Devices -->
                        <div class="max-w-[1140px] lg:pb-32 relative">
                            <!-- Mobile Device -->
                            <x-figure-program src="{{ asset('images/program3.jpg') }}" />
                            <!-- End Mobile Device -->

                            <!-- Browser Device -->
                            <figure
                                class="bg-green-500 p-[2px] ms-auto me-20 relative z-1 max-w-full w-3xl h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] rounded-lg">

                                <div class="bg-gray-100 rounded-lg">
                                    <div class="max-w-full sm:h-92 rounded-b-lg px-4 py-6 sm:py-16 sm:px-12">
                                        <ul class="space-y-3 text-sm">
                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Science in Computer Science (BSCS)
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Science in Information Technology
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Science in Computer Engineering (BSCpE)
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Science in Electronics & Communications Engineering
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Master in Data Science
                                                </x-list-programs-span>
                                            </x-list-programs>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                            <!-- End Browser Device -->
                        </div>
                        <!-- End Devices -->
                    </x-list-tab-content>

                    <x-list-tab-content class="hidden" id="tabs-with-card-4" ariaLabel="tabs-with-card-item-4">
                        <!-- Devices -->
                        <div class="max-w-[1140px] lg:pb-32 relative">
                            <!-- Mobile Device -->
                            <x-figure-program src="{{ asset('images/program4.jpg') }}" />
                            <!-- End Mobile Device -->

                            <!-- Browser Device -->
                            <figure
                                class="bg-green-500 p-[2px] ms-auto me-20 relative z-1 max-w-full w-3xl h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] rounded-lg">

                                <div class="bg-gray-100 rounded-lg">
                                    <div class="max-w-full sm:h-92 rounded-b-lg px-4 py-6 sm:py-16 sm:px-12">
                                        <ul class="space-y-3 text-sm">
                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Elementary Education
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Secondary Education
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Master of Arts in Education
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Teacher Certification Program (TCP)
                                                </x-list-programs-span>
                                            </x-list-programs>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                            <!-- End Browser Device -->
                        </div>
                        <!-- End Devices -->
                    </x-list-tab-content>

                    <x-list-tab-content class="hidden" id="tabs-with-card-5" ariaLabel="tabs-with-card-item-5">
                        <!-- Devices -->
                        <div class="max-w-[1140px] lg:pb-32 relative">
                            <!-- Mobile Device -->
                            <x-figure-program src="{{ asset('images/program5.jpg') }}" />
                            <!-- End Mobile Device -->

                            <!-- Browser Device -->
                            <figure
                                class="bg-green-500 p-[2px] ms-auto me-20 relative z-1 max-w-full w-3xl h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] rounded-lg">

                                <div class="bg-gray-100 rounded-lg">
                                    <div class="max-w-full sm:h-92 rounded-b-lg px-4 py-6 sm:py-16 sm:px-12">
                                        <ul class="space-y-3 text-sm">
                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Laws (LLB or JD equivalent)
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Bachelor of Science in Criminology
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Master in Criminal Justice
                                                </x-list-programs-span>
                                            </x-list-programs>

                                            <x-list-programs>
                                                <x-list-programs-span>
                                                    Certificate in Legal Studies
                                                </x-list-programs-span>
                                            </x-list-programs>
                                        </ul>
                                    </div>
                                </div>
                            </figure>
                            <!-- End Browser Device -->
                        </div>
                        <!-- End Devices -->
                    </x-list-tab-content>
                    <div id="b" class="block"></div>
                </div>
                <!-- End Tab Content -->
            </div>

            <!-- End Features -->
        </div>
        <div class="bg-white">
            <!-- Features -->
            <div class="max-w-6xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <div class="pb-6 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                    <h2
                        class="text-2xl font-bold md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight text-green-500">
                        Experience Our Story
                    </h2>
                    <p class="mt-5 text-gray-600 text-justify sm:text-left">
                        Behind every number is a story — a student who discovered their potential, a teacher who went the
                        extra
                        mile, and a community that believed in the power of education. These achievements are not just ours;
                        they belong to every partner who dared to dream with us.
                    </p>
                </div>
                <div class="animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                    <div class="min-h-[35vh] md:min-h-[75vh] bg-center bg-cover bg-no-repeat relative rounded-xl"
                        style="background-image: url('{{ asset('images/school1.jpg') }}');">
                        <div
                            class="absolute bottom-0 start-0 end-0 max-w-xs text-center mx-auto p-6 md:start-auto md:text-start md:mx-0">
                            <!-- Card -->
                            <div
                                class="animate-impact-section opacity-0 translate-y-10 transition-all duration-1000 px-5 py-4 inline-block bg-white rounded-lg md:p-7">
                                <div class="hidden md:block">
                                    <h3 class="text-lg font-bold text-gray-800 sm:text-2xl">How <span
                                            class="font-bold uppercase text-green-600">Kenncoi</span>
                                        University Creates Impact</h3>
                                    <p class="mt-2 text-gray-800">Discover how the University is redefining education.</p>
                                </div>

                                <div class="md:mt-16">
                                    <a class="flex items-center gap-2 text-sm font-medium text-gray-800 hover:text-green-500 focus:outline-hidden focus:text-green-500"
                                        href="#">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="5 3 19 12 5 21 5 3" />
                                        </svg>
                                        Watch our story
                                    </a>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Features -->

            <!-- Card Blog -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-12 mx-auto">

                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card -->
                    <a class="group relative flex flex-col w-full min-h-60 bg-center bg-cover rounded-xl hover:shadow-lg focus:outline-hidden focus:shadow-lg transition"
                        style="background-image:url('{{ asset('images/blog1.jpg') }}')" href="#">
                        <div class="flex-auto p-4 md:p-6">
                            <h3 class="text-xl text-white/90 group-hover:text-white"><span class="font-bold">Library &
                                    Media
                                    Center</span>
                                A hub of knowledge and digital resources.</h3>
                        </div>
                        <div class="pt-0 p-4 md:p-6">
                            <div
                                class="inline-flex items-center gap-2 text-sm font-medium text-white group-hover:text-white group-focus:text-white">
                                Read more
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group flex flex-col focus:outline-hidden" href="#">
                        <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                            <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                                src="{{ asset('images/blog2.jpg') }}" alt="Blog Image">
                        </div>

                        <div class="mt-7">
                            <h3 class="text-xl font-semibold text-green-500 group-hover:text-green-600 ">
                                Science & Computer Labs
                            </h3>
                            <p class="mt-3 text-gray-800">
                                Hands-on, tech-enhanced learning spaces.
                            </p>
                            <p
                                class="mt-5 inline-flex items-center gap-x-1 text-sm text-green-500 decoration-2 group-hover:underline group-focus:underline font-medium">
                                Read more
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="group flex flex-col focus:outline-hidden" href="#">
                        <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                            <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                                src="{{ asset('images/blog3.jpg') }}" alt="Blog Image">
                        </div>

                        <div class="mt-7">
                            <h3 class="text-xl font-semibold text-green-500 group-hover:text-green-600 ">
                                E-Learning Suites
                            </h3>
                            <p class="mt-3 text-gray-800">
                                Equipped for digital and blended learning.
                            </p>
                            <p
                                class="mt-5 inline-flex items-center gap-x-1 text-sm text-green-500 decoration-2 group-hover:underline group-focus:underline font-medium">
                                Read more
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Blog -->

            <!-- FAQ -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="grid md:grid-cols-5 gap-10">
                    <div class="md:col-span-2 animate-fade-section opacity-0 transition-opacity duration-[1000ms]">
                        <div class="max-w-lg sm:pr-12">
                            <h2 class="text-2xl font-bold md:text-5xl md:leading-tight text-gray-800">Steps to enroll<br>
                                at
                                <span class="font-bold uppercase text-green-600">Kenncoi</span>
                            </h2>
                            <p class="mt-1 hidden md:block text-gray-600">Joining the University is simple and seamless.
                                Follow
                                these steps to begin your educational journey with us:</p>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="md:col-span-3">
                        <!-- Accordion -->
                        <div class="hs-accordion-group divide-y divide-gray-200">
                            <div class="hs-accordion pb-3 active"
                                id="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <x-button-accordion label="1. Submit Your Application" ariaControl="hs-basic-with-title-and-arrow-stretched-collapse-one">
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-green-500 group-hover:text-green-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </x-button-accordion>                            
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                    <p class="text-gray-600">
                                        Complete the online or in-person application form with required documents.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                                <x-button-accordion label="2. Document Review" ariaControl="hs-basic-with-title-and-arrow-stretched-collapse-two">
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-green-500 group-hover:text-green-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </x-button-accordion>                                    
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                                    <p class="text-gray-600">
                                        Our admissions team will review your application and academic records.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3"
                                id="hs-basic-with-title-and-arrow-stretched-heading-three">
                                <x-button-accordion label="3. Interview & Assessment" ariaControl="hs-basic-with-title-and-arrow-stretched-collapse-three">
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-green-500 group-hover:text-green-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </x-button-accordion>                               
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region"
                                    aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                                    <p class="text-gray-600">
                                        Attend a short interview and/or entrance exam depending on your grade level.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-four">
                                <x-button-accordion label="4. Receive Admission Offer" ariaControl="hs-basic-with-title-and-arrow-stretched-collapse-four">
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-green-500 group-hover:text-green-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </x-button-accordion>                            
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-four"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
                                    <p class="text-gray-600">
                                        If accepted, you’ll receive an official offer letter and enrollment package.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-five">
                                <x-button-accordion label="5. Confirm Enrollment" ariaControl="hs-basic-with-title-and-arrow-stretched-collapse-five">
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-green-500 group-hover:text-green-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </x-button-accordion>                               
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-five"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
                                    <p class="text-gray-600">
                                        Secure your spot by completing the enrollment form and paying the initial fees.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-six">
                                <x-button-accordion label="6. Start Your Journey" ariaControl="hs-basic-with-title-and-arrow-stretched-collapse-six">
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-green-500 group-hover:text-green-600"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </x-button-accordion>                                   
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-six"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
                                    <p class="text-gray-600">
                                        Attend orientation, meet your teachers, and begin your adventure with us!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion -->
                    </div>
                    <!-- End Col -->
                </div>
                <div id="con" class="block"></div>
                <!-- End Grid -->
            </div>
            <!-- End FAQ -->

            <!-- Contact -->
            <div class="bg-slate-100">
                <div class="max-w-7xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16 mx-auto ">
                    <div class="mb-6 sm:mb-10 max-w-2xl text-center mx-auto">
                        <h2
                            class="text-2xl font-bold md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight text-green-500">
                            Contact
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 lg:items-center gap-6 md:gap-8 lg:gap-12">
                        <div class="aspect-w-16 aspect-h-6 lg:aspect-h-14 overflow-hidden bg-gray-100 rounded-2xl">
                            <div class="p-2 bg-slate-200">
                                <iframe class="rounded-lg"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11133.497760790018!2d4.782040255424198!3d45.763685656659675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eb822ec733b7%3A0xa20d58c99e225084!2sChampvert%2C%2069005%20Lyon%2C%20France!5e0!3m2!1sen!2sph!4v1745303091152!5m2!1sen!2sph"
                                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="space-y-8 lg:space-y-16">
                            <div>
                                <h3 class="mb-5 font-semibold text-green-500">
                                    Our address
                                </h3>

                                <!-- Grid -->
                                <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
                                    <div class="flex gap-4">
                                        <svg class="shrink-0 size-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>

                                        <div class="grow">
                                            <p class="text-sm text-gray-800">
                                                Lyon, France
                                            </p>
                                            <address class="mt-1 text-gray-800 not-italic">
                                                69005 Champvert Street, Fort de Vaise House<br>
                                                Villa Montana St.
                                            </address>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Grid -->
                            </div>

                            <div>
                                <h3 class="mb-5 font-semibold text-green-500">
                                    Our contacts
                                </h3>

                                <!-- Grid -->
                                <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
                                    <div class="flex gap-4">
                                        <svg class="shrink-0 size-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z">
                                            </path>
                                            <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path>
                                        </svg>

                                        <div class="grow">
                                            <p class="text-sm text-gray-800">
                                                Email us
                                            </p>
                                            <p>
                                                <a class="relative inline-block font-medium text-gray-800 before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 hover:before:bg-black focus:outline-hidden focus:before:bg-black"
                                                    href="mailto:example@site.so">
                                                    kenncoi.institution.ksu.edu.ph
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex gap-4">
                                        <svg class="shrink-0 size-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                        </svg>

                                        <div class="grow">
                                            <p class="text-sm text-gray-600">
                                                Call us
                                            </p>
                                            <p>
                                                <a class="relative inline-block font-medium text-gray-800 before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 hover:before:bg-black focus:outline-hidden focus:before:bg-black"
                                                    href="mailto:example@site.so">
                                                    +63 227-4658
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Grid -->
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                </div>
            </div>
            <!-- End Contact -->
        </div>
        <!-- End Approach -->
    </div>
@endsection
