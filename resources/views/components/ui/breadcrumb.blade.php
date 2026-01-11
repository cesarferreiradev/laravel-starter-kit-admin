@props([
    'items' => []
])

<div class="flex items-center gap-4">
    <nav class="flex items-center text-sm text-zinc-500">
        <a wire:navigate href="{{ route('home.index') }}" class="flex items-center hover:text-zinc-900 transition-colors">
            <i data-lucide="house" class="mr-2 h-4 w-4"></i>
            Dashboard
        </a>

        @forelse($items as $breadcrumb)
            <i data-lucide="chevron-right" class="mx-2 h-4 w-4 text-zinc-400"></i>
            @if(!$loop->last)
                <a href="{{ $breadcrumb['link'] ?? '#' }}" class="flex items-center hover:text-zinc-900 transition-colors">
                    <i data-lucide="{{ $breadcrumb['icon'] ?? 'circle' }}" class="mr-2 h-4 w-4"></i>
                    {{ $breadcrumb['item'] }}
                </a>
            @else
                <span class="font-medium text-zinc-900">{{ $breadcrumb['item'] }}</span>
            @endif
        @empty
        @endforelse

    </nav>
</div>
