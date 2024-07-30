@props([
    'page_title' => 'Creando un Producto',
    'active' => false,
    'page_create' =>true,
])
@extends('product.main')

@include('product.partials.edit-create')
@section('contenido')
	<div class="flex w-full items-center justify-center text-white">
		<form action="{{ route('product.store') }}" class="mb-2 mt-8 flex flex-col gap-6" enctype="multipart/form-data"
			method="POST">
			@csrf
            <div class="flex flex-col gap-2 pt-10">
				<label for="name" htmlFor="remember">Nombre</label>
				<input class="rounded-md border bg-transparent" id="name" name="name" type="text" value= "">
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
			<div class="flex flex-col gap-2 pt-10">
				<label for="description" htmlFor="remember">Descripción</label>
				<textarea class="text-blue-gray-700 h-full w-full rounded-md border bg-transparent" cols="100" id="description"
				 name="description" rows="10"></textarea>
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
			<div class="flex w-full justify-around pt-10">
				<div class="flex flex-col gap-4">
					<label for="price">Precio</label>
					<input class="rounded-md border bg-transparent" id="price" name="price" type="text" value= "">
				</div>
				<div class="flex flex-col gap-4">
					<label for="categ">Categoría</label>
					<input class="rounded-md border bg-transparent" id="categ" name="categ" type="text" value= "">
				</div>
				@yield('categorias-crear')
			</div>
			<div class="flex w-full justify-around pt-10">
				<div class="flex flex-col gap-2">
					<label for="file-img" htmlFor="remember">Subir Imagen</label>
					<input class="rounded-md border bg-transparent" id="file_img" name="file_img" type="file">
				</div>
				@yield('imagenes')
			</div>
			<div class="flex justify-center">
				<button class="max-w-40 mt-6 rounded-md bg-blue-500 px-6 py-2 text-xl text-white" type="submit">Guardar</button>
			</div>
		</form>
	</div>
	<div class="hidden" role="alert">
		<div class="rounded-t bg-red-500 px-4 py-2 font-bold text-white">
			Atención
		</div>
		<div class="rounded-b border border-t-0 border-red-400 bg-red-100 px-4 py-3 text-red-700">
			<p>"No guardado"</p>
		</div>
	</div>
@endsection
