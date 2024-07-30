<x-nav-links href="/" :active="request()->is('/')">Inicio</x-nav-links>
<x-nav-links href="{{ route('product.main') }}" :active="request()->is('product/main')">Home</x-nav-links>
<x-nav-links href="{{ route('product.index') }}" :active="request()->is('product/index')">Index</x-nav-links>
<x-nav-links href="{{ route('product.create') }}" :active="request()->is( 'product/create')">Nuevo Producto</x-nav-links>




