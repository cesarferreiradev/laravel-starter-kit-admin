@props([
    'text' => '',
    'link' => ''
])

<button
    wire:navigate
    href="{{ $link }}"
    class="inline-flex cursor-pointer w-full md:w-auto items-center justify-center rounded-md bg-emerald-600 px-4 py-2 text-sm font-medium text-white hover:bg-emerald-700 transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-emerald-700"
>
    <i data-lucide="plus" class="mr-2 h-4 w-4"></i>
    {{ $text }}
</button>
