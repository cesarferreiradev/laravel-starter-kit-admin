<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard admin</title>
        <script src="https://unpkg.com/lucide@latest"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app-admin-v2.css'])
    </head>
    <body class="bg-white text-zinc-950 antialiased">

        <div
            class="flex h-screen w-full overflow-hidden"
            x-data="{
                collapsed: localStorage.getItem('sidebarCollapsed') === 'true',
                toggleSidebar() {
                    this.collapsed = !this.collapsed;
                    localStorage.setItem('sidebarCollapsed', this.collapsed);
                }
            }"
        >

            <livewire:admin.layout.sidebar-admin />

            <main class="flex flex-1 bg-[#FFFFFF] flex-col overflow-hidden">

                <x-ts-dialog />
                <x-ts-toast />

                <livewire:admin.layout.header-admin />

                <div class="flex-1 overflow-y-auto py-6 px-17">
                    {{ $slot }}
                </div>
            </main>
        </div>

        @livewireScripts

        <script>
            function refreshIcons() {
                if (window.lucide) {
                    window.lucide.createIcons();
                }
            }

            document.addEventListener('DOMContentLoaded', () => {
                refreshIcons();
            });

            document.addEventListener('livewire:navigated', () => {
                setTimeout(refreshIcons, 50);
            });

            document.addEventListener('livewire:init', () => {
                Livewire.hook('morph.updated', ({ el, component }) => {
                    refreshIcons();
                });
            });
        </script>

    </body>
</html>
