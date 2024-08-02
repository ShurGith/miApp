@props([
    'themes'=> [
        "oxygen",
        "light",
        "dark",
        "aqua",
        "cupcake",
        "retro",
],
])
<ul class="py-2">
@foreach ($themes as $theme)
   <a class="flex items-center gap-3 px-6 py-2 font-medium text-gray-900 capitalize hover:bg-gray-100" href="{{ route('theme', $theme) }}">{{ $theme }}</a>
@endforeach
</ul>
