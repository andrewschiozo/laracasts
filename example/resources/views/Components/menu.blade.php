@php($menus = json_decode('[{"name": "Home", "url": "home"}, {"name": "About", "url": "about"}, {"name": "Contact", "url": "contact"}]'))
@php($classNavDevice = $attributes['device'] === 'mobile' ? 'space-y-1 px-2 pt-2 pb-3 sm:px-3' : '')

<nav {{ $attributes }} class="{{ $classNavDevice }}">
    {{-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" --}}
    @php($classDevice = $attributes['device'] === 'mobile' ? 'block' : '')
    @foreach($menus as $menu)
        @php($classActive = request()->is($menu->url) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white')
        <x-menu-link class="{{ $classDevice }} {{ $classActive }} rounded-md px-3 py-2 text-sm font-medium" href="/{{ $menu->url }}">{{ $menu->name }}</x-menu-link>
    @endforeach
</nav>