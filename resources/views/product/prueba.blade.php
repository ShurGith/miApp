@props([
    'page_title' => 'Viendo ' . $product->name,
    'active' => false,
])
@extends('product.main')

@section('contenido')
	<div class="producto-show min-h-screen flex w-8/12 flex-col items-start justify-start rounded-lg text-white">
<h1> {{ $product->name }} Categorías</h1>
        @foreach ( $product->categorias as $categ )
            {{ $categ->name }}
        @endforeach
	</div>

@endsection
