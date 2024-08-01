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
                <header class="shadow">
                    <div class="flex items-center gap-2 max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                      <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 10.5854H18M12 14.5854H18M12 18.5854H18M6.00194 10.5864L7.03069 11.6152L9.02875 9.61712M5.99806 14.5874L7.02881 15.6181L9.03075 13.6162M5.99806 18.5874L7.02881 19.6181L9.03075 17.6162M21 7.08544V18.5854C21 20.4711 21 21.4139 20.4142 21.9997C19.8284 22.5854 18.8856 22.5854 17 22.5854H7C5.11438 22.5854 4.17157 22.5854 3.58579 21.9997C3 21.4139 3 20.4711 3 18.5854V7.08544C3 6.62079 3 6.38846 3.03843 6.19526C3.19624 5.40188 3.81644 4.78168 4.60982 4.62387C4.80302 4.58544 5.03534 4.58544 5.5 4.58544H7.0367C7.56872 4.58544 8 5.01672 8 5.54874C8 6.08076 8.43128 6.51204 8.9633 6.51204H15.0367C15.5687 6.51204 16 6.08076 16 5.54874C16 5.01672 16.4313 4.58544 16.9633 4.58544H18.5C18.9647 4.58544 19.197 4.58544 19.3902 4.62387C20.1836 4.78168 20.8038 5.40188 20.9616 6.19526C21 6.38846 21 6.62079 21 7.08544ZM8 4.82436V5.02899C8 5.548 8 5.80751 8.09399 6.0087C8.19329 6.22126 8.36418 6.39215 8.57674 6.49145C8.77794 6.58544 9.03744 6.58544 9.55645 6.58544H14.4435C14.9626 6.58544 15.2221 6.58544 15.4233 6.49145C15.6358 6.39214 15.8067 6.22127 15.906 6.0087C16 5.80751 16 5.548 16 5.02898V4.75192C16 4.49221 16 4.36235 15.976 4.25483C15.8916 3.87642 15.5961 3.5809 15.2177 3.4965C15.1102 3.47252 14.9803 3.47252 14.7206 3.47252C14.5865 3.47252 14.5195 3.47252 14.4821 3.46971C14.2336 3.45106 14.3351 3.47894 14.1119 3.36799C14.0783 3.35131 13.8765 3.2314 13.473 2.99157C12.7157 2.54153 11.4226 2.35158 10.4695 3.02816C10.196 3.22233 10.0592 3.31942 10.0118 3.3459C9.84183 3.44066 9.82646 3.44556 9.63305 3.46665C9.57902 3.47254 9.50329 3.47254 9.35184 3.47253C9.02459 3.47253 8.86096 3.47253 8.72719 3.51046C8.39344 3.6051 8.13258 3.86596 8.03794 4.19971C8 4.33348 8 4.49711 8 4.82436Z" stroke="black" stroke-width="null" stroke-linecap="round" stroke-linejoin="round" class="my-path"></path>
                        </svg> @yield('header')
                        - <span class="flex gap-2 items-center"><svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7734 4.42255L8.01924 12.2706C7.79291 12.4996 7.67974 12.6142 7.60917 12.7552C7.53859 12.8961 7.51521 13.0544 7.46845 13.3709L7.30803 14.4566C7.12534 15.693 7.034 16.3112 7.40145 16.6645C7.7689 17.0178 8.39306 16.9118 9.64137 16.6999L10.7375 16.5139C11.0571 16.4596 11.2168 16.4325 11.3579 16.3593C11.499 16.2861 11.6121 16.1715 11.8385 15.9425L19.5927 8.09446C20.2553 7.42379 20.5866 7.08846 20.5814 6.67712C20.5761 6.26578 20.2363 5.93906 19.5566 5.28563L18.6209 4.38599C17.9412 3.73256 17.6014 3.40584 17.1844 3.4112C16.7674 3.41655 16.4361 3.75188 15.7734 4.42255Z" stroke="black" stroke-width="null" class="my-path"></path>
                        <path d="M18.3329 9.22206L14.7773 5.6665" stroke="black" stroke-width="null" class="my-path"></path>
                        <path d="M21 21H3" stroke="black" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                        </svg>{{ $page_title }}</span>
                    </div>
                </header>

    <main>
        @yield('contenido')
    </main>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
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
