<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel {{$pageTitle ?? ''}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-full">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white">
            <div class="p-4 border-b border-gray-800">
                <div class="flex items-center justify-center">
                    <!-- <img src="https://tailwindflex.com/images/logo.svg" alt="Logo" class="h-8 w-auto"> -->
                    <span class="text-xl font-bold">Laracasts</span>
                </div>
            </div>

            <nav class="mt-5 px-2">
                <!-- Main Navigation -->
                <div class="space-y-4">
                    <!-- Dashboard -->
                    <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg bg-gray-800 text-white group transition-all duration-200 hover:bg-gray-700">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </a>

                    <!-- Analytics Dropdown -->
                    <div class="space-y-1">
                        <button class="w-full flex items-center justify-between px-4 py-2.5 text-sm font-medium rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white focus:outline-none" aria-expanded="true" aria-controls="analytics-dropdown">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01" />
                                </svg>
                                Jobs
                            </div>
                            <svg class="ml-2 h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="space-y-1 pl-11" id="analytics-dropdown">
                            <a href="{{ route('jobs') }}" class="group flex items-center px-4 py-2 text-sm text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                Overview
                            </a>
                            <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                Tags
                            </a>
                        </div>
                    </div>

                    <!-- Team Dropdown -->
                    <div class="space-y-1">
                        <button class="w-full flex items-center justify-between px-4 py-2.5 text-sm font-medium rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white focus:outline-none" aria-expanded="false" aria-controls="team-dropdown">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Users
                            </div>
                            <svg class="ml-2 h-5 w-5 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="hidden space-y-1 pl-11" id="team-dropdown">
                            <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                Users
                            </a>
                            <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                Roles
                            </a>
                            <a href="#" class="group flex items-center px-4 py-2 text-sm text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                                Permissions
                            </a>
                        </div>
                    </div>

                    <!-- Documents -->
                    <!-- <a href="#" class="flex items-center px-4 py-2.5 text-sm font-medium rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white group transition-all duration-200">
                        <svg class="h-5 w-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Documents
                    </a> -->
                </div>
            </nav>

            <!-- User Profile -->
            <div class="mt-auto p-4 border-t border-gray-800">
                <div class="flex items-center">
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-white">{{ Auth::user()->first_name }}</p>
                        <p><a href="{{ route('profile.edit') }}" class="text-xs text-gray-400">My profile</a></p>
                        <button form="logout-form" class="text-xs text-gray-400">Logout</button>
                        <form method="POST" action="{{ route('logout') }}" class="hidden" id="logout-form">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </aside>


        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-100">
            <header>
                <h1 class="text-2xl font-semibold text-gray-900">{{ $pageHeading ?? '' }}</h1>
            </header>

            {{ $slot }}
        </main>
    </div>

    <script>
        // Dropdown functionality
        document.querySelectorAll('button[aria-controls]').forEach(button => {
            button.addEventListener('click', () => {
                const isExpanded = button.getAttribute('aria-expanded') === 'true';
                const dropdownContent = document.getElementById(button.getAttribute('aria-controls'));

                button.setAttribute('aria-expanded', !isExpanded);
                dropdownContent.classList.toggle('hidden');
                button.querySelector('svg:last-child').classList.toggle('rotate-180');
            });
        });
    </script>

</body>

</html>
