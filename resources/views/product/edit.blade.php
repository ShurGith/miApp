@props([
    'page_title' => 'Editando ' . $product->name,
    'page_create' => false,
])
@extends('product.main')

<!-- Para los select -->
@include('product/partials/edit-create')

@section('contenido')
	<div class="flex w-8/12 items-center justify-center text-white border rounded-lg">
		<form action="{{ route('product.update', $product->id) }}" class="mb-2 mt-8 flex w-8/12 flex-col gap-4"
			enctype="multipart/form-data" method="post">
			@csrf
			@method('PUT')
			<div class="flex w-full items-start justify-between">
				<div class="flex w-4/12 flex-col gap-2">
					<label for="name" htmlFor="remember">Nombre</label>
					<input class="rounded-md border bg-transparent" id="name" name="name" type="text"
						value= "{{ $product->name }}">
					@error('name')
						<div role="alert">
							<div class="rounded-t bg-red-500 px-4 py-2 font-bold text-white">
								Atención
							</div>
							<div class="rounded-b border border-t-0 border-red-400 bg-red-100 px-4 py-3 text-red-700">
								<p>{{ $message }}</p>
							</div>
						</div>
					@enderror
				</div>
				<div class="flex w-2/12 flex-col gap-2">
					<label for="price">Precio</label>
					<input class="rounded-md border bg-transparent" id="price" name="price" type="text"
						value= "{{ $product->price }}">
				</div>
				{{-- <div class="flex w-5/12 justify-center pl-10"> --}}
						<img class="w-40 rounded-md border" src="{{ asset('images/productos/' . $product->image) }}" alt="{{ $product->name }}">
				{{-- </div> --}}
			</div>
			<div class="flex w-11/12 flex-col gap-2 pt-10">
				<label for="description" htmlFor="remember">Descripción</label>
				<textarea class="text-blue-gray-700 h-full w-full rounded-md border bg-transparent" cols="100" id="description"
				 name="description" rows="10">{{ $product->description }}</textarea>
				@error('description')
					<div role="alert">
						<div class="rounded-t bg-red-500 px-4 py-2 font-bold text-white">
							Atención
						</div>
						<div class="rounded-b border border-t-0 border-red-400 bg-red-100 px-4 py-3 text-red-700">
							<p>{{ $message }}</p>
						</div>
					</div>
				@enderror
			</div>
			<div class="flex w-11/12 justify-evenly pt-10">
				<div class="flex flex-col gap-4">
					<label for="new_categ">Categoría</label>
					<input class="rounded-md border bg-transparent" id="new_categ" name="new_categ" type="text"
						value= "{{ $product->category }}">
				</div>
				@yield('categorias')
			</div>
			<div class="flex w-full justify-evenly pt-10 gap-20">
				<div class="flex flex-col gap-2">
					<label for="file-img" htmlFor="remember">Subir Imagen</label>
					<input class="rounded-md border bg-transparent" id="file_img" name="file_img" type="file">
				</div>
				@yield('imagenes')
			</div>
			<div class="flex w-full items-center justify-around py-10">
				<button class="max-w-40 rounded-md bg-blue-500 px-6 py-2 text-xl text-white" type="submit">Guardar</button>
			</div>
		</form>
	</div>
	{{-- <div class="hidden" role="alert">
		<div class="rounded-t bg-red-500 px-4 py-2 font-bold text-white">
			Atención
		</div>
		<div class="rounded-b border border-t-0 border-red-400 bg-red-100 px-4 py-3 text-red-700">
			<p>"No guardado"</p>
		</div>
	</div> --}}
@endsection
