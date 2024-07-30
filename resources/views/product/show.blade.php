@props([
    'page_title' => 'Viendo ' . $product->name,
    'active' => false,
])
@extends('product.main')

@section('contenido')
	<div class="producto-show min-h-screen flex w-8/12 flex-col items-start justify-start rounded-lg text-white">
		<div class="flex w-full items-start justify-between">
			<div class="flex flex-col w-4/12 items-star gap-2 pt-4">
				<h3>Nombre:</h3>
				<h2>{{ $product->name }}</h2>
			</div>
			<div class="flex flex-col w-4/12 items-start gap-2 pt-4">
				<h3>Precio:</h3>
				<h2>{{ $product->price }} <sup>€</sup></h2>
			</div>
			<div class="flex flex-col w-4/12 items-start justify-end gap-2 pt-4">
				<h3>Categorías:</h3>
                <div class="flex gap-2 pl-4">
                @foreach ( $product->categorias as $categ )
                  <h6 class="capitalize">{{ $categ->name }}</h6>
               @endforeach
            </div>
			</div>
		</div>
		<div class="flex w-11/12 flex-col gap-2 pt-10">
			<h3>Descripción:</h3>
			<h4>{{ $product->description }}</h4>
		</div>
        <div class="flex gap-10 w-full justify-evenly pt-10">
            <div>
                <h3>En catálogo desde:</h3>
                <h2>{{ $product->created_at->format('d-m-Y') }}</h2>
                @if ($product->created_at->format('d-m-Y')  == $product->updated_at->format('d-m-Y'))
                    <p>No ha sido modificado desde entonces</p>
                @else
                    <p>Ha sido modificado el {{ $product->updated_at->format('d-m-Y') }}</p>
                @endif
            </div>
				<div alt="{{ $product->name }}" class="h-80 w-80 rounded-md border bg-contain bg-no-repeat"
					style="background-image: url({{ asset('images/productos/' . $product->image) }})"></div>
			</div>
		  <div class="w-full flex justify-center items-center pt-12">
			<a class="rounded-md bg-blue-600 px-4 py-2 text-base text-white boton-editar" href="{{ route('product.edit', $product) }}">Editar {{ $product->name }}</a>
		</div>
	</div>

@endsection
