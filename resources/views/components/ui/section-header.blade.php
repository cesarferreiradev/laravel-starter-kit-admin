@props([
    'title' => '',
    'description' => ''
])

<section class="flex mt-2 flex-col md:flex-row items-center justify-between gap-4">
    <div class="space-y-0.5 w-[40%]">
        <h2 class="title">{{ $title }}</h2>

        @if($description)
            <p class="text-zinc-500">
                {{ $description }}
            </p>
        @endif

    </div>

    <div class="action">
        {{ $slot }}
    </div>
</section>
