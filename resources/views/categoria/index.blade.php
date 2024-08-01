@props([
    'a' => 0,
    'page_create' => true,
    'dashboard' => true,
    'page_title' => __('utiles.EditCategs'),
    'modal' => session('postData.modal'),
    'saludo' => session('postData.saludo')
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

        @if(isset($modal))
             @include('categoria.partials.modal-'.$modal)
             <script>
                setTimeout(() => {
                    btnModal.click()
                }, 200);
                window.onload=()=>{
                var pos=window.name || 0;
                window.scrollTo(0,pos);
                }
                window.beforeunload= ()=>{
                    window.name=self.scrollY || (document.documentElement.scrollTop+document.body.scrollTop);
                }
            </script>
        @endif
@endsection
