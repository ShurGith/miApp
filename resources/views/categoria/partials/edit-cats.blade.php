<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
	<div class="overflow-hidden sm:rounded-lg">
		<div class="p-6 border-2 border-white text-gray-900 dark:text-gray-100">
			<h1 class="mb-3 text-2xl font-bold">{{ __('utiles.gestionCategorias') }}</h1>
			<form action="{{ route('catUpdate') }}" class="flex flex-col gap-6 p-2" method="post">
				@csrf
				@method('PUT')
				<div class="mb-2 flex flex-col gap-4 rounded border border-white p-4">
					<h3 class="text-lg font-bold">{{ __('utiles.actualCategs') }}</h3>
					@yield('categorias-crear')
					<div class="flex items-end gap-1 pl-6">
						<svg aria-hidden="true" class="h-6 w-6 text-blue-500 dark:text-white" fill="currentColor" height="24"
						viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
						<path clip-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
						fill-rule="evenodd" /></svg>
						<p class="text-sm text-blue-500">{{ __('utiles.unCheck') }}</p>
					</div>
				</div>
     			<div class="flex flex-col gap-2 p-4 border border-white">
					<label class="text-lg font-bold" for="new_catg" htmlFor="remember">{{ __('utiles.addNewCateg') }}</label>
					<input class="w-2/6 rounded-md border bg-transparent" id="new_categ" name="new_catg" type="text"></input>
				</div>
				<div class="flex w-full items-center justify-around">
					<button class="btn btn-primary text-lg"	type="submit">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
