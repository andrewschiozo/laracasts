@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block mt-1 w-full bg-gray-100 p-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
