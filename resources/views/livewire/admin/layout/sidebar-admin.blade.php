<div>
    <aside
        :class="collapsed ? 'w-20' : 'w-64'"
        class="flex-col border-r h-full sidebar-wrapper hidden md:flex transition-all duration-300"
    >
        <div
            :class="collapsed ? 'justify-center px-0' : 'px-6'"
            class="flex h-16 items-center border-b sidebar-header transition-all duration-300"
        >
            <a class="flex items-center gap-2 font-semibold">
                <div class="flex h-6 w-6 items-center justify-center rounded-md sidebar-logo">
                    <i data-lucide="package" class="h-4 w-4"></i>
                </div>
                <span x-show="!collapsed" class="whitespace-nowrap" :class="collapsed ? 'text-xs' : ''">Módulo Admin</span>
            </a>
        </div>
        <div class="flex-1 overflow-y-auto py-4">
            <nav class="grid gap-1 px-2">
                <div class="px-2 py-1.5">
                    <h2
                        x-show="!collapsed"
                        class="mb-2 px-2 text-xs font-semibold tracking-tight sidebar-section-title whitespace-nowrap"
                    >
                        admin
                    </h2>
                    <div class="grid gap-1">

                        <a
                            wire:navigate
                            href="{{ route('home.index') }}"
                            :class="collapsed ? 'justify-center' : ''"
                            class="base-item-sidebar
                            @if(Route::currentRouteName() == "home.index")
                                item-sidebar-active
                            @else
                                item-sidebar
                            @endif"
                        >
                            <i data-lucide="layout-grid" class="h-4 w-4 shrink-0"></i>
                            <span x-show="!collapsed" class="whitespace-nowrap">Dashboard</span>
                        </a>

                        <a
                            wire:navigate
                            href="{{ route('users.index') }}"
                            :class="collapsed ? 'justify-center' : ''"
                            class="base-item-sidebar
                            @if(in_array(Route::currentRouteName(), ["users.index"]))
                                item-sidebar-active
                            @else
                                item-sidebar
                            @endif"
                        >
                            <i data-lucide="users" class="h-4 w-4 shrink-0"></i>
                            <span x-show="!collapsed" class="whitespace-nowrap">Usuários</span>
                        </a>

                    </div>
                </div>
            </nav>
        </div>
    </aside>
</div>
