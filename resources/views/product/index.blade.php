@props([
    'page_title' => 'Listado de todos los productos',
    'background' => '',
    'i' => 0,
])
@php
function acortar($text){
   // $descr = $product->description;
    if(strlen($text) > 125){
         $text = substr($text, 0, 125). ' ...';
    }
    return $text;
}
@endphp
@extends('product.main')
@section('contenido')
	<div class="relative w-8/12 min-h-screen overflow-x-auto text-white shadow-md sm:rounded-lg">
		<table class="w-full text-left text-sm text-blue-100 rtl:text-right dark:text-blue-100">
			<thead class="border-b border-gray-400 bg-gray-600 text-xs uppercase text-white dark:text-white">
				<tr>
					<th class="px-6 py-3" scope="col">Imagen</th>
					<th class="px-6 py-3" scope="col">Nombre</th>
					<th class="px-6 py-3" scope="col">Descripción</th>
					<th class="px-6 py-3" scope="col">Precio</th>
					<th class="px-6 py-3" scope="col">Acciones</th>
				</tr>
			</thead>
			@forelse($productos as $product)
				@php
					$i++;
					$background = $i % 2 == 0 ? 'bg-gray-600' : 'bg-gray-500';
                    $image = $product->image ? 'images/productos/' .$product->image : "images/default-imagen.svg"
				@endphp
				<tr class="{{ $background }} border-b border-gray-400 hover:bg-gray-700">
					<th class="px-6 py-3" scope="row"><img class="max-h-40" src="{{ asset( $image) }}"></th>
					<td  class="px-6 py-3">{{ $product->name }}</td>
					<td  class="px-6 py-3">{{ acortar($product->description) }}</td>
					<td  class="px-6 py-3">{{ $product->price }} <sup class="span-euro">€</sup></td>
					<td>
						<div class=" flex gap-1 pr-2">
							<a class="max-w-40 rounded-md bg-blue-600 px-4 py-2 text-sm text-white boton-editar" href="{{ route('product.show', $product) }}">Ver</a>
							<a class="max-w-40 rounded-md bg-blue-600 px-4 py-2 text-sm text-white boton-editar" href="{{ route('product.edit', $product) }}">Editar</a>
							<button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="max-w-40 rounded-md bg-red-600 px-4 py-2 text-sm text-white boton-eliminar">Eliminar</button>
						</div>
					</td>
				</tr>
			@empty
			   <th class="text-center w-full text-6xl text-blue-500">Aun no tenemos datos para mostrar</th>
			@endforelse
		</table>
	</div>
<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Ultimo paso para proceder al eliminado de este producto?</h3>
                <div class="flex justify-center ">
                @if(isset($product))
                <form method="POST" action="{{ route('product.delete', $product->id) }}">
                @endif
                @csrf
                @method('DELETE')
                <input type="submit" data-modal-hide="popup-modal" class="cursor-pointer text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-700 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center" value=" Si, Borrar"></input>
                </form>
                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
