<div>
    <header class="flex h-16 items-center gap-4 border-b border-zinc-200 bg-white px-16">
        <button class="md:hidden">
            <i data-lucide="menu" class="h-5 w-5"></i>
        </button>
        <div class="flex items-center gap-2">
            <button id="button-collapsed" class="text-zinc-500 hover:text-zinc-900" @click="toggleSidebar()">
                <span x-show="!collapsed">
                    <i data-lucide="panel-left-close" class="h-5 w-5"></i>
                </span>
                <span x-show="collapsed" style="display: none;">
                    <i data-lucide="panel-left-open" class="h-5 w-5"></i>
                </span>
            </button>
            <div class="h-4 w-[1px] bg-zinc-200"></div>
            <span class="text-base text-[13pt] text-gray-700 font-bold capitalize">{{ $title ?? '' }}</span>
        </div>
        <div class="ml-auto flex items-center gap-10">

            <div class="hidden md:flex items-center gap-3 mr-6">
                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border border-zinc-200 bg-white p-1">
                    @if(isset($company->logo_path) && $company->logo_path)
                        <img src="{{ asset($company->logo_path) }}" class="h-full w-full object-contain rounded-md" alt="{{ $company->name ?? 'Company' }}">
                    @else
                        <i data-lucide="building-2" class="h-5 w-5 text-zinc-400"></i>
                    @endif
                </div>
                <div class="flex flex-col">
                    <span class="text-sm font-semibold text-zinc-900 leading-none">Nome da empresa</span>
                    <span class="text-xs text-zinc-500 mt-0.5">Licença Ativa</span>
                </div>
            </div>

            <div class="flex items-center gap-1 border-r border-zinc-200 pr-4 mr-2">
                <button class="inline-flex h-9 w-9 items-center justify-center rounded-md text-zinc-400 hover:bg-zinc-50 hover:text-zinc-900 transition-colors" title="Calendário">
                    <i data-lucide="calendar" class="h-4 w-4"></i>
                </button>
                <button class="inline-flex h-9 w-9 items-center justify-center rounded-md text-zinc-400 hover:bg-zinc-50 hover:text-zinc-900 transition-colors" title="Mensagens">
                    <i data-lucide="message-square" class="h-4 w-4"></i>
                </button>
                <button class="relative inline-flex h-9 w-9 items-center justify-center rounded-md text-zinc-400 hover:bg-zinc-50 hover:text-zinc-900 transition-colors" title="Notificações">
                    <i data-lucide="bell" class="h-4 w-4"></i>
                    <span class="absolute top-2.5 right-2.5 h-1.5 w-1.5 rounded-full bg-red-500 ring-1 ring-white"></span>
                </button>
            </div>

            <button class="flex items-center gap-3 rounded-md px-2 py-2 text-left text-sm font-medium hover:bg-zinc-100 transition-colors">

                @php
                    $name = auth()->user()->name;
                    $initials = collect(explode(' ', $name))
                        ->map(fn($word) => strtoupper(substr($word, 0, 1)))
                        ->take(2)
                        ->implode('');
                @endphp

                <div class="flex h-8 w-8 items-center justify-center rounded-md bg-zinc-100 text-zinc-500">
                    <span class="text-xs font-medium text-zinc-700">{{ $initials }}</span>
                </div>
                <div class="hidden md:block">
                    <p class="text-sm font-medium text-zinc-900">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-zinc-500">{{ auth()->user()->email }}</p>
                </div>
                <i data-lucide="chevron-down" class="hidden h-4 w-4 text-zinc-500 md:block"></i>
            </button>
        </div>
    </header>
</div>
