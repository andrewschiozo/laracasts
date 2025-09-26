@props(['active' => false, 'device' => 'desktop', 'type' => 'link'])

{{-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" --}}
@php($classActive = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white')
@php($classDevice = $device === 'mobile' ? 'block' : '')
@php($tag = $type === 'link' ? 'a' : 'button')


@php($tag = match($type) {
    'link'   => 'a',
    'button' => 'button',
    default  => 'a',
})


<{{ $tag }}
    class="{{ $classDevice }} {{ $classActive }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}"
   {{ $attributes }}>{{ $slot }}</{{ $tag }}>