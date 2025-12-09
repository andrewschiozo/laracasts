<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel {{$pageTitle ?? ''}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-12 items-center justify-between">

                    <div class="shrink-0">
                        <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>

                    <div class="flex items-baseline space-x-4">
                        <x-menu-guest></x-menu>
                    </div>

                    <div class="flex items-baseline">
                        <x-menu-link
                            href="{{ route('login') }}"
                            :active="request()->routeIs('login')">
                            Login
                        </x-menu-link>
                    </div>

                </div>
            </div>

        </nav>

        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $pageHeading ?? '' }}</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Slot content -->
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
