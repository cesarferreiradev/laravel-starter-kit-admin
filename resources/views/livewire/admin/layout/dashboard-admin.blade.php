<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
        <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet" />
        <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/css/app-admin.css'])
    </head>
    <body class="bg-white">

        <x-ts-dialog />
        <x-ts-toast />


        <div class="flex h-screen w-full">

            <livewire:admin.layout.sidebar-admin />

            <main class="flex-1 bg-white overflow-auto">

                <livewire:admin.layout.header-admin />

                <div class="px-16 pr-30 mt-24 pb-10">
                    {{ $slot }}
                </div>
            </main>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/locales/pt-br.global.min.js"></script>

        @livewireScripts

    </body>
</html>
