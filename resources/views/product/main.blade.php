@include('layouts.header')

<section class="w-ful flex items-start pt-10 justify-center m-h-screen bg-cover "  style="background-image: url({{ asset('images/bg_4.jpg') }})">
@yield('contenido')
</section>
@include('layouts.footer')
