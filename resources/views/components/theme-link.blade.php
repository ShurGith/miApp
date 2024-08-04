@props([
    //Your Themes in array
    'themes'=> [
        "oxygen",
        "light",
        "dark",
        "aqua",
        "cupcake",
        "retro",
],
    'theme_active' => false,
    'theme_actual' => Session::get('themeLocal') ,
])

@foreach ($themes as $theme)
  <a class="{{ ($theme_actual == $theme)? 'btn btn-primary  pointer-events-none ' :""  }} flex pl-2 py-2 gap-4 width font-bold text-gray-900 capitalize hover:bg-red-100" href="{{ route('theme', $theme) }}">
      <svg <a class="{{ ($theme_actual != $theme)? 'hidden ' :""  }} width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 12.4434L8.14339 16.5868C8.81006 17.2535 9.14339 17.5868 9.5576 17.5868C9.97182 17.5868 10.3051 17.2535 10.9718 16.5868L20.001 7.55762" stroke="#000000" stroke-width="null" stroke-linecap="round" class="my-path"></path>
</svg>
    {{ $theme }}</a>
@endforeach


