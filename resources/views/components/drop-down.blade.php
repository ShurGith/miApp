<div class="relative z-10">
	<div class="relative inline-flex dropdown">
		<button
			class="inline-flex items-center justify-center gap-2 px-3 py-1 text-sm font-semibold text-center text-white transition-all duration-500 bg-indigo-600 rounded-full shadow-xs cursor-pointer dropdown-toggle hover:bg-indigo-700"
			data-target="dropdown-with-icon" type="button">
			{{ __('utiles.theme') }}
		</button>
		<div aria-labelledby="dropdown-with-icon"
			class="absolute hidden mt-2 bg-white shadow-lg dropdown-menu open top-full min-w-40 rounded-xl" id="dropdown-with-icon">
			<x-theme-link></x-theme-link>
		</div>
	</div>
</div>

