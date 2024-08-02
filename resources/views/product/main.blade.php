@include('layouts.header')

<section class="flex items-start justify-center pt-10 bg-cover w-ful m-h-screen"
	style="background-image: url({{ asset('images/bg_4.jpg') }})">
	@yield('contenido')
</section>
@include('layouts.footer')
