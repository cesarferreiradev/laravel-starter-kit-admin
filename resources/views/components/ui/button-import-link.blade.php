@props([
    'text' => ''
])

<button class="inline-flex w-full md:w-auto items-center justify-center rounded-md border border-zinc-200 bg-white px-4 py-2 text-sm font-medium text-zinc-900 hover:bg-zinc-50 transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-emerald-700">
    <i data-lucide="upload" class="mr-2 h-4 w-4 text-zinc-500"></i>
    {{ $text }}
</button>
