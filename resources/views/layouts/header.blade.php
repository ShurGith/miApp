<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ Session::get('themeLocal') }}">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>🤖 MiApp 👻 {{ isset($page_title) ? $page_title : '' }}</title>

	<!-- Fonts -->
	<link href="https://fonts.bunny.net" rel="preconnect">
	<link
		href="https://fonts.bunny.net/css?family=abeezee:400i|akronim:400|amita:400,700|cherry-swash:400|nunito-sans:200,400,700,900"
		rel="stylesheet" />
	<link href="{{ asset('css/productos.css') }}" rel="stylesheet">
	<link href="{{ asset('css/pagedone.css') }}" rel="stylesheet">

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
	<section class="items-center w-full">
		<header class="flex items-center justify-between w-full gap-2 px-10 bg-headerBg lg:grid-cols-3">
			<div class="flex gap-10 pl-10 ">
                <!-- DropDown -->
                <div class="relative z-10">
                	<div class="relative inline-flex dropdown">
                		<button
                			class="inline-flex items-center justify-center gap-2 px-3 py-1 text-sm font-semibold text-center text-white transition-all duration-500 bg-indigo-600 rounded-full shadow-xs cursor-pointer dropdown-toggle hover:bg-indigo-700"
                			data-target="dropdown-with-icon" type="button">
                           <!--Put yor link name -->
                			{{ __('utiles.theme') }}
                		</button>
                		<div aria-labelledby="dropdown-with-icon"
                			class="absolute hidden mt-2 bg-white shadow-lg dropdown-menu open top-full min-w-40 rounded-xl" id="dropdown-with-icon">
                			<x-theme-link></x-theme-link>
                		</div>
                	</div>
                </div>
                <!-- DropDown -->
				<a href="/"><img src="{{ asset('/images/logo.svg') }}"></a>
			</div>
			<nav class="flex w-full items-between">
				<ul class="flex justify-between w-full gap-4 py-6">
					<div class="flex items-center justify-center w-9/12 gap-4">
						@include('product.partials.nav-product')
					</div>
					<div class="flex gap-2">
						@auth
							<li class="nav-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
						@else
							<div class="flex items-center justify-end gap-4">
								<li>
									<svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
										<path class="my-path"
											d="M16 7 C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
											stroke-width="null" stroke="#ffffff"></path>
										<path class="my-path"
											d="M11.9998 14C9.15153 14 6.65091 15.3024 5.23341 17.2638C4.48341 18.3016 4.10841 18.8204 4.6654 19.9102C5.2224 21 6.1482 21 7.99981 21H15.9998C17.8514 21 18.7772 21 19.3342 19.9102C19.8912 18.8204 19.5162 18.3016 18.7662 17.2638C17.3487 15.3024 14.8481 14 11.9998 14Z"
											stroke-width="null" stroke="#ffffff"></path>
									</svg>
								</li>
								<li class="nav-item"><a href="{{ route('login') }}">Log in</a></li>
								<li class="nav-item"><a href="{{ route('register') }}">Register</a></li>
							</div>
						@endauth
					</div>
					<div class="flex gap-2">
						<li class="nav-item"><a href="{{ route('languaje', 'en') }}"><img src="{{ asset('vendor/blade-flags/language-en.svg') }}" class="w-6 h-6"></a></li>
						<li class="nav-item"><a href="{{ route('languaje', 'es') }}"><img src="{{ asset('vendor/blade-flags/language-es.svg') }}" class="w-6 h-6"></a></li>
					</div>
				</ul>
			</nav>
		</header>
	</section>
<!-- -->
