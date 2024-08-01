		<!-- Modal toggle -->
		<button data-modal-target="modal-encontrado" data-modal-toggle="modal-encontrado" id="btnModal"></button>
		<!-- Main modal -->
		<div aria-hidden="true"
			class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
			id="modal-encontrado" tabindex="-1">
			<div class="relative max-h-full w-full max-w-2xl p-4">
				<!-- Modal content -->
				<div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
					<!-- Modal header -->
					<div class="bg-warning flex items-center gap-6 rounded-t border-b p-4 pl-10 dark:border-gray-600 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-triangle" width="52" height="52" viewBox="0 0 24 24" stroke-width="1" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 9v4" />
                            <path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                            <path d="M12 16h.01" />
                          </svg>
						<h3 class="text-xl font-semibold text-slate-500 dark:text-red-400">
							{{ __('utiles.infoEncontrado') }}
						</h3>
						<button class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg  text-sm text-gray-400 bg-gray-200 hover:text-gray-900"
							data-modal-hide="modal-encontrado" type="button">
							<svg aria-hidden="true" class="h-3 w-3" fill="none" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
								<path d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" />
							</svg>
							<span class="sr-only">Close modal</span>
						</button>
					</div>
					<!-- Modal body -->
					<div class="space-y-4 p-4 md:p-5">
						<p class="text-center text-base leading-relaxed text-gray-500 dark:text-gray-400">
                           {{ __('utiles.datoEncontrado')  }}
						</p>
					</div>
					<!-- Modal footer -->
					<div class="flex gap-6 items-center justify-center rounded-b border-t border-gray-200 p-4 dark:border-gray-600 md:p-5">
						<button
							class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
							data-modal-hide="modal-encontrado" type="button">{{ __('Accept') }}</button>
                        <form action="{{ route('imgDelSeg') }}" method="post" class="mb-0">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="archivo" id="archivo" value=" {{ session('postData.imagen') }}">
                            <button
							class="rounded-lg bg-red-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
							data-modal-hide="modal-encontrado" type="submit">{{ __('utiles.IgualDelete') }}</button>
                        </form>
					</div>
				</div>
			</div>
		</div>
