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

		@if (session()->has('success'))
        <script>
            setTimeout(() => {
                btnModal.click()
            }, 300);
			</script>
		@endif
        @if (session()->has('postData.imagen'))
        <script>
            setTimeout(() => {
                btnEncontrado.click()
            }, 300);
			</script>
        @endif

        @include('categoria.partials.edit-files')
        @include('categoria.partials.modal-encontrado')
        @include('categoria.partials.modal-success')
	@endsection
