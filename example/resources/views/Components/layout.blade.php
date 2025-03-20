<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel {{$pageTitle ?? ''}}</title>
    </head>
    <body>
        <x-menu />

        <!-- Slot Content -->
        <!-- Use 'echo $slot' -> PHP  ou '{{ $slot }}' -> Blade -->
        {{ $slot }}
    </body>
</html>
