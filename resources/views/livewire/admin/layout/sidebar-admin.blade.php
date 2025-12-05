<div>

    <aside class="w-[270px] h-full border-r border-gray-200" style="background-color: #FAFAFA;">
        <div class="h-[68px] flex items-center justify-between px-4 py-3 border-b border-gray-200">
            <div class="flex items-center gap-3">
                <div class="w-6 h-6 bg-gray-900 rounded-md flex items-center justify-center">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="white">
                        <rect width="12" height="12" rx="1"/>
                    </svg>
                </div>
                <div>
                    <div class="text-sm font-semibold text-gray-900">Módulo gestão</div>
                    <div class="text-xs text-gray-500">Plano enterprise</div>
                </div>
            </div>
        </div>
        <div class="px-3 py-4 mt-3">
            <div class="text-xs font-medium text-gray-500 px-2 mb-2">admin</div>

            <a
                href="{{ route('home.index') }}"
                wire:navigate
                class="
                    @if(Route::currentRouteName() === 'home.index')
                        item-sidebar-active
                    @else
                        item-sidebar
                    @endif
                    w-full flex items-center mt-1 gap-3 px-2 py-1.5 text-sm rounded-md"
            >
                <i class="bx bx-dashboard-alt" style="font-size: 14pt;"></i>
                <span>Dashboard</span>
            </a>

            <a
                href="{{ route('users.index') }}"
                wire:navigate
                class="
                    @if(Route::currentRouteName() === 'users.index')
                        item-sidebar-active
                    @else
                        item-sidebar
                    @endif
                    w-full flex items-center mt-1 gap-3 px-2 py-1.5 text-sm rounded-md"
            >
                <i class="bx bx-community" style="font-size: 14pt;"></i>
                <span>Usuários</span>
            </a>

        </div>

    </aside>
</div>

<script>
    let playgroundOpen = true;

    function togglePlayground() {
        playgroundOpen = !playgroundOpen;
        const submenu = document.getElementById('playgroundSubmenu');
        const chevron = document.getElementById('playgroundChevron');

        if (playgroundOpen) {
            submenu.style.display = 'block';
            chevron.innerHTML = '<path d="M4 6l4 4 4-4"/>';
        } else {
            submenu.style.display = 'none';
            chevron.innerHTML = '<path d="M6 4l4 4-4 4"/>';
        }
    }
</script>
