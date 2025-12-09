@props(['device' => 'desktop'])
@php($menus = json_decode('[{"name": "Home", "url": "home"}, {"name": "Jobs", "url": "jobs"}, {"name": "About", "url": "about"}]'))

<nav
    {{ $attributes }}>
        @foreach($menus as $menu)
            <x-menu-link
                href="/{{ $menu->url }}"
                :active="request()->routeIs($menu->url)"
                device="{{$device}}">
                {{ $menu->name }}
            </x-menu-link>
        @endforeach
</nav>
