<!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Starter kit - laravel</title>
        <tallstackui:script />
        @livewireStyles
        @vite(['resources/css/app.css'])
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
