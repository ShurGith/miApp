<div class="mt-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
	<div class="overflow-hidden sm:rounded-lg">
		<div class="p-6 border-2 border-white text-gray-900 dark:text-gray-100">
			<h1 class="mb-3 text-2xl font-bold">{{ __('utiles.gestionFiles') }}</h1>
			<form action="{{ route('imageDelete') }}" class="flex flex-col gap-6 p-2" method="post">
				@csrf
				@method('PUT')
				<div class="mb-2 flex flex-col gap-4 rounded border border-white p-4">
					<h3 class="text-lg font-bold mb-2">{{ __('utiles.deleteFiles') }}</h3>
					<div class="w-5/6 flex justify-around">
					    @yield('imagenes')
					</div>
					<div class="flex w-full items-center justify-around">
					    <button class="btn btn-primary text-lg"	type="submit">{{ __('utiles.deleteSelected') }}</button>
				    </div>
				</div>
                 </form>
        <div class="mb-2 flex flex-col gap-4 rounded border border-white p-4">
			<h3 class="text-lg font-bold mb-2">{{ __('utiles.newImage') }}</h3>
			<form action="{{ route('imageUpload') }}" class="flex flex-col gap-6 p-2" method="post">
				@csrf
				@method('PUT')
				<input type="file" name="file_subida" class="ml-20 file-input file-input-bordered w-full max-w-xs" />
				<div class="flex w-full items-center justify-around">
					<button class="btn btn-primary text-lg"	type="submit">{{ __('utiles.uploadImage') }}</button></button>
				</div>
			</form>
		</div>
	</div>
</div>
