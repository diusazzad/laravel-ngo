@props(['href'])

<a {{ $attributes->merge(['class' => 'bg-white text-blue-500 hover:bg-blue-600 hover:text-white px-4 py-2 rounded-lg'])
    }} href="{{ $href }}">
    {{ $slot }}
</a>
