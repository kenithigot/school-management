@props(['src'])

<figure class="hidden absolute bottom-0 start-0 z-2 max-w-full w-60 h-auto mb-20 ms-20 lg:block">
    <div
        class="p-[2px] bg-green-500 rounded-3xl shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)]">
        <img class="max-w-full rounded-[1.25rem] h-auto" src="{{ $src }}"
            alt="Features Image">
    </div>
</figure>