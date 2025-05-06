@props(['span'])

<!-- Item -->
<div class="flex gap-x-5 ms-1 opacity-0 -translate-x-10 transition-all duration-700 ease-in-out animate-checkpoint">
    <!-- Icon -->
    <div
        class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-white">
        <div class="relative z-10 size-8 flex justify-center items-center">
            <span
                class="flex shrink-0 justify-center items-center size-8 border border-white font-semibold text-xs uppercase rounded-full">
                <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#ffffff"
                        d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                </svg>
            </span>
        </div>
    </div>
    <!-- End Icon -->

    <!-- Right Content -->
    <div class="grow pt-0.5 pb-8 sm:pb-12">
        <p class="text-sm lg:text-base text-neutral-300">
            <span class="text-white font-semibold">{{ $span }}</span>
           {{ $slot }}
        </p>
    </div>
    <!-- End Right Content -->
</div>
<!-- End Item -->
