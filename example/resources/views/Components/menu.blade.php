@props(['device' => 'desktop'])
@php($menus = json_decode('[{"name": "Home", "url": "home"}, {"name": "About", "url": "about"}, {"name": "Contact", "url": "contact"}]'))

<nav class="{{ $device === 'mobile' ? 'space-y-1 px-2 pt-2 pb-3 sm:px-3' : '' }}"
    {{ $attributes }}
>
    @foreach($menus as $menu)
        <x-menu-link
            href="/{{ $menu->url }}"
            :active="request()->routeIs($menu->url)"
            device="{{$device}}"
        >
            {{ $menu->name }}
        </x-menu-link>
    @endforeach
</nav>
