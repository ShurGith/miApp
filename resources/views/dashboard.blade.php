<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="retro">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        (!isset($page_title)) ?  $page_title = __('Dashboard'):  "";
    @endphp
        <title>{{ config('app.name', 'Laravel')." 👹 ". $page_title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- @isset($header) --}}
                <header class="shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                       @yield('header')
                    </div>
                </header>
            {{-- @endisset --}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main>
        @yield('contenido')
        {{-- {{ $contenido }} --}}
        {{-- @yield('dashboard') --}}
    </main>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  {{-- @yield('contenido') --}}
                  <div class="glass" date-theme="cupcake" >
                     <button class="btn btn-primary">One</button>
                      <button class="btn btn-secondary">Two</button>
                      <button class="btn btn-accent btn-outline">Three</button>
                    </div>
                  <div data-theme="oxygen" >
                     <button class="btn btn-primary">One</button>
                      <button class="btn btn-secondary">Two</button>
                      <button class="btn btn-accent btn-outline">Three</button>
                    </div>
                        <div  data-theme="oxygen">
                        <button class="btn btn-info">Info</button>
                    <button class="btn btn-success">Success</button>
                    <button class="btn btn-warning">Warning</button>
                    <button class="btn btn-error">Error</button>
                    <button class="btn glass">Glass button</button>
                        </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
