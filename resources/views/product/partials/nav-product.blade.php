<x-nav-links href="/" :active="request()->is('/')">Inicio</x-nav-links>
<x-nav-links href="{{ route('product.main') }}" :active="request()->is('product/main')">{{ __('utiles.catalog') }}</x-nav-links>
<x-nav-links href="{{ route('product.index') }}" :active="request()->is('product/index')">Index</x-nav-links>
@auth
<x-nav-links href="{{ route('product.create') }}" :active="request()->is( 'product/create')">{{ __('utiles.newProd') }}</x-nav-links>
@endauth
