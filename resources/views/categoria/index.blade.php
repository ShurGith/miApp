@props([
    'a' => 0,
    'page_create' => true,
    'dashboard' => true,
    'page_title' => __('utiles.EditCategs'),
])

@extends('dashboard')
@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection
@include('product.partials.edit-create')
@section('contenido')
    <div class="w-full">
        <h1 class="text-xl font-bold mb-3">{{ $page_title }}</h1>
        <form action="{{ route('catUpdate') }}" class="mb-2 flex flex-col gap-6 border" method="post">
            @csrf
            @method('PUT')
            <div class="flex flex-col gap-4 mb-6">
                <h3 class="text-lg font-bold">{{ __('utiles.actualCategs') }}</h3>
                @yield('categorias-crear')
                <div class="flex items-end gap-1 pl-6">
                    <svg class="w-6 h-6 text-blue-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                            clip-rule="evenodd" />
                    </svg>
                    <p class="text-blue-500 text-sm">{{ __('utiles.unCheck') }}</p>
                </div>
            </div>
            <div class="flex flex-col gap-2 mb-6 ">
                <label class="text-lg font-bold" for="new_catg" htmlFor="remember">{{ __('utiles.addNewCateg') }}</label>
                <input class="rounded-md border bg-transparent w-2/6" type="text" name="new_catg" id="new_categ"></input>
            </div>
            <div class="flex w-full items-center justify-around pt-10">
                <button
                    class="cursor-pointer rounded-md bg-blue-500 px-6 py-2 font-bold text-white hover:bg-blue-700 transition duration-300"
                    type="submit">Guardar</button>
            </div>

        </form>
    </div>



    @if (session()->has('success'))
     <script>
     setTimeout(() => {
        btnModal.click()
     }, 300);
</script>
  @endif


<!-- Modal toggle -->
<button id="btnModal" data-modal-target="default-modal" data-modal-toggle="default-modal"></button>

  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      {{ __('utiles.infoAcction') }}
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5 space-y-4">
                  <p class="text-base text-center leading-relaxed text-gray-500 dark:text-gray-400">
                    {!! session('success') !!}
                  </p>
              </div>
              <!-- Modal footer -->
              <div class="flex justify-center items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Accept') }}</button>
              </div>
          </div>
      </div>
  </div>

@endsection
