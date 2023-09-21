@props(['href'])

<a {{ $attributes->merge(['class' => 'text-white hover:text-blue-300']) }} href="{{ $href }}">
    {{ $slot }}
</a>
