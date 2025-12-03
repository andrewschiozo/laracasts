@props(['device' => 'desktop'])
@php($menus = json_decode('[{"name": "Home", "url": "home"}, {"name": "Jobs", "url": "jobs"}, {"name": "About", "url": "about"}]'))

<nav class="{{ $device === 'mobile' ? 'space-y-1 px-2 pt-2 pb-3 sm:px-3' : '' }}"
    {{ $attributes }}>
    @foreach($menus as $menu)
        <x-menu-link
            href="/{{ $menu->url }}"
            :active="request()->routeIs($menu->url)"
            device="{{$device}}">
            {{ $menu->name }}
        </x-menu-link>
    @endforeach
    <form method="POST" action="{{ route('logout') }}" class="hidden" id="logout-form">
        @csrf
    </form>

    @auth
        <x-menu-link form="logout-form" type="button"
            >
            {{ __('Log Out') }}
        </x-menu-link>
    @endauth
</nav>
