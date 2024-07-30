<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>🤖 MiApp 👻 {{ isset($page_title) ? $page_title : 'Poner Titulo' }}</title>

    <!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=abeezee:400i|akronim:400|amita:400,700|cherry-swash:400|nunito-sans:200,400,700,900" rel="stylesheet" />
    <link href="{{ asset('css/productos.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
   <section class="w-full items-center">
        <header class="px-10 flex justify-center items-center gap-2 lg:grid-cols-3 w-full bg-headerBg">
            {{-- @if (Route::has('login')) --}}
            <div><a href="/"><img src="{{ asset('/images/logo.svg') }}"></a></div>
            <nav class="flex w-full">
                <ul class="flex justify-center p-6 gap-4 w-full">
                    @auth
                        @include('product.partials.nav-product')
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                        @endif
                    @endauth
                </ul>
            </nav>
            {{-- @endif --}}
        </header>
    </section>
