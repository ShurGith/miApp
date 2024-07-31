@props([
    'a' => 0,
    'page_create' => true,
    'dashboard' => true,
    'page_title' => __('utiles.EditCategs'),
])

@extends('dashboard')
@section('header')
	<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
		{{ __('Dashboard') }}
	</h2>
@endsection
@include('product.partials.edit-create')
@section('contenido')
	<div class="py-2">
        @include('categoria.partials.edit-cats')
        @include('categoria.partials.edit-files')
		@if (session()->has('success'))
			<script>
				setTimeout(() => {
					btnModal.click()
				}, 300);
			</script>
		@endif

		<!-- Modal toggle -->
		<button data-modal-target="default-modal" data-modal-toggle="default-modal" id="btnModal"></button>

		<!-- Main modal -->
		<div aria-hidden="true"
			class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
			id="default-modal" tabindex="-1">
			<div class="relative max-h-full w-full max-w-2xl p-4">
				<!-- Modal content -->
				<div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
					<!-- Modal header -->
					<div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
						<h3 class="text-xl font-semibold text-gray-900 dark:text-white">
							{{ __('utiles.infoAcction') }}
						</h3>
						<button
							class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
							data-modal-hide="default-modal" type="button">
							<svg aria-hidden="true" class="h-3 w-3" fill="none" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
								<path d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									stroke="currentColor" />
							</svg>
							<span class="sr-only">Close modal</span>
						</button>
					</div>
					<!-- Modal body -->
					<div class="space-y-4 p-4 md:p-5">
						<p class="text-center text-base leading-relaxed text-gray-500 dark:text-gray-400">
							{!! session('success') !!}
						</p>
					</div>
					<!-- Modal footer -->
					<div class="flex items-center justify-center rounded-b border-t border-gray-200 p-4 dark:border-gray-600 md:p-5">
						<button
							class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
							data-modal-hide="default-modal" type="button">{{ __('Accept') }}</button>
					</div>
				</div>
			</div>
		</div>
	@endsection
