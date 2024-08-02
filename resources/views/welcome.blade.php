@include('layouts.header')
<main class="relative p-5 bg-no-repeat bg-cover lg:h-full" style="background-image:url({{ asset('images/bg_4.jpg') }})">
	<section class="relative p-5 bg-cover lg:h-full">
		<div class="relative z-0 w-full h-full pt-24 pb-12 overflow-hidden bg-center bg-cover rounded-3xl"
			style="background-image: url(https://pagedone.io/asset/uploads/1710221348.png);">
			<div class="absolute top-0 left-0 z-10 w-full h-full bg-black/40"></div>
			<div class="relative z-20 w-full h-full px-8 lg:px-24">
				<div class="flex flex-col items-center justify-between w-full h-full">
					<div class="block">
						<h1
							class="max-w-xl mx-auto mb-4 text-4xl font-semibold text-center text-white font-cormorent sm:text-5xl md:text-6xl md:leading-snug">
							THE BEST LUXURY HOTELS
						</h1>
						<p class="text-lg font-normal text-center text-white mb-7">
							Discover pure luxury in every corner of our hotel.
						</p>
						<div
							class="flex flex-col items-center gap-6 p-3 mx-auto border rounded-2xl border-white/60 bg-white/5 backdrop-blur-md sm:w-max md:flex-row lg:mt-20">
							<div class="flex flex-col items-center gap-10 divide-white/60 sm:flex-row sm:divide-x">
								<div class="block">
									<div class="relative inline-flex dropdown">
										<button
											class="dropdown-toggle mb-1.5 flex flex-col items-start gap-2.5 bg-transparent text-base font-medium text-white placeholder:text-white focus-within:outline-0 max-sm:text-center"
											data-target="dropdown-check-in" type="button">
											Check In
											<p class="text-xs font-medium text-gray-300 max-sm:text-center">Sun, 20 March 2022</p>
										</button>
										<div aria-labelledby="dropdown-default"
											class="absolute hidden mt-2 bg-white shadow-lg dropdown-menu open top-6 w-max rounded-xl"
											id="dropdown-check-in">
											<div class="mx-auto w-full max-w-[366px] px-6 py-6">
												<div class="flex items-center gap-2 mb-2">
													<div
														class="flex items-center gap-8 rounded-full border border-gray-300 px-0.5 py-0.5 text-xs font-medium text-gray-900">
														<button
															class="p-2 text-gray-900 transition-all duration-500 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
															<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
																<path d="M10.0002 11.9999L6 7.99978L10.0025 3.99725" stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="1.6" stroke="currentcolor"></path>
															</svg>
														</button>
														January
														<button
															class="p-2 text-gray-900 transition-all duration-500 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
															<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
																<path d="M6.00236 3.99707L10.0025 7.99723L6 11.9998" stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="1.6" stroke="currentcolor"></path>
															</svg>
														</button>
													</div>
													<button
														class="flex items-center gap-1.5 rounded-full border border-gray-300 py-2.5 pl-3 pr-1.5 text-xs font-medium text-gray-900 transition-all duration-500 hover:bg-indigo-100 hover:text-indigo-600">
														2023
														<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
															<path d="M12 5.99973L7.99984 9.9999L3.99731 5.99738" stroke-linecap="round" stroke-linejoin="round"
																stroke-width="1.6" stroke="currentcolor"></path>
														</svg>
													</button>
												</div>
												<table class="pb-3 border-b border-gray-300">
													<thead class="mb-2">
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Mo</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Tu</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	We</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Th</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Fr</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Sa</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Su</p>
															</td>
														</tr>
													</thead>
													<tbody>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	26</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	27</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	28</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	29</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	30</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	31</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	1</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	2</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	3</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	4</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	5</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	6</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	7</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	8</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	9</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	10</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	11</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	12</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10 rounded-l-full">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium transition-all duration-300 text-whiterounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	13</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	14</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10 rounded-r-full">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	15</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10 rounded-l-full">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	16</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	17</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10 rounded-r-full">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	18</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	19</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	20</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	21</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	22</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	23</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	24</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	25</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	26</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	27</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	28</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	29</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	30</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	31</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	1</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	2</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	3</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	4</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	5</p>
															</td>
														</tr>
													</tbody>
												</table>
												<div class="flex items-center justify-end gap-4 pt-3">
													<button
														class="px-3 py-2 text-xs font-medium text-gray-900 transition-all duration-500 border border-gray-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">Cancel</button>
													<button
														class="px-3 py-2 text-xs font-medium text-white transition-all duration-500 bg-indigo-600 rounded-full hover:bg-indigo-700">Apply</button>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="block sm:pl-10">
									<div class="relative inline-flex dropdown">
										<button
											class="dropdown-toggle mb-1.5 flex flex-col items-start gap-2.5 bg-transparent text-base font-medium text-white placeholder:text-white focus-within:outline-0 max-sm:text-center"
											data-target="dropdown-check-out" type="button">
											Check Out
											<p class="text-xs font-medium text-gray-300 max-sm:text-center">Mon, 21 March 2022</p>
										</button>
										<div aria-labelledby="dropdown-default"
											class="absolute hidden mt-2 bg-white shadow-lg dropdown-menu open -left-24 top-6 w-max rounded-xl"
											id="dropdown-check-out">
											<div class="mx-auto w-full max-w-[366px] px-6 py-6">
												<div class="flex items-center gap-2 mb-2">
													<div
														class="flex items-center gap-8 rounded-full border border-gray-300 px-0.5 py-0.5 text-xs font-medium text-gray-900">
														<button
															class="p-2 text-gray-900 transition-all duration-500 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
															<svg fill="none" height="16" viewBox="0 0 16 16" width="16"
																xmlns="http://www.w3.org/2000/svg">
																<path d="M10.0002 11.9999L6 7.99978L10.0025 3.99725" stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="1.6" stroke="currentcolor"></path>
															</svg>
														</button>
														January
														<button
															class="p-2 text-gray-900 transition-all duration-500 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
															<svg fill="none" height="16" viewBox="0 0 16 16" width="16"
																xmlns="http://www.w3.org/2000/svg">
																<path d="M6.00236 3.99707L10.0025 7.99723L6 11.9998" stroke-linecap="round" stroke-linejoin="round"
																	stroke-width="1.6" stroke="currentcolor"></path>
															</svg>
														</button>
													</div>
													<button
														class="flex items-center gap-1.5 rounded-full border border-gray-300 py-2.5 pl-3 pr-1.5 text-xs font-medium text-gray-900 transition-all duration-500 hover:bg-indigo-100 hover:text-indigo-600">
														2023
														<svg fill="none" height="16" viewBox="0 0 16 16" width="16"
															xmlns="http://www.w3.org/2000/svg">
															<path d="M12 5.99973L7.99984 9.9999L3.99731 5.99738" stroke-linecap="round" stroke-linejoin="round"
																stroke-width="1.6" stroke="currentcolor"></path>
														</svg>
													</button>
												</div>
												<table class="pb-3 border-b border-gray-300">
													<thead class="mb-2">
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Mo</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Tu</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	We</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Th</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Fr</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Sa</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	Su</p>
															</td>
														</tr>
													</thead>
													<tbody>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	26</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	27</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	28</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	29</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	30</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	31</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	1</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	2</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	3</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	4</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	5</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	6</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	7</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	8</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	9</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	10</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	11</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	12</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10 rounded-l-full">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium transition-all duration-300 text-whiterounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	13</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	14</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10 rounded-r-full">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	15</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10 rounded-l-full">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	16</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	17</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10 rounded-r-full">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	18</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	19</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	20</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	21</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	22</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	23</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	24</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	25</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	26</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	27</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	28</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	29</p>
															</td>
														</tr>
														<tr class="flex">
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	30</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-900 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	31</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	1</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	2</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	3</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	4</p>
															</td>
															<td class="flex items-center justify-center w-10 h-10">
																<p
																	class="flex items-center justify-center w-full h-full text-sm font-medium text-gray-300 transition-all duration-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">
																	5</p>
															</td>
														</tr>
													</tbody>
												</table>
												<div class="flex items-center justify-end gap-4 pt-3">
													<button
														class="px-3 py-2 text-xs font-medium text-gray-900 transition-all duration-500 border border-gray-300 rounded-full hover:bg-indigo-100 hover:text-indigo-600">Cancel</button>
													<button
														class="px-3 py-2 text-xs font-medium text-white transition-all duration-500 bg-indigo-600 rounded-full hover:bg-indigo-700">Apply</button>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="block sm:pl-10">
									<div class="relative inline-flex dropdown">
										<button
											class="block text-xs font-medium text-gray-300 bg-transparent dropdown-toggle focus-within:outline-0 max-sm:text-center"
											data-target="dropdown-Guest" type="button">
											<p class="mb-1.5 text-base font-medium text-white max-sm:text-center">Guest</p>
											1 Adults
										</button>
										<div aria-labelledby="dropdown-Guest"
											class="absolute hidden w-48 mt-2 bg-white shadow-lg dropdown-menu -left-24 top-full rounded-xl"
											id="dropdown-Guest">
											<ul class="py-2">
												<li>
													<a class="block px-6 py-2 font-medium text-gray-900 hover:bg-gray-100" href="javascript:;">
														2 Adults
													</a>
												</li>
												<li>
													<a class="block px-6 py-2 font-medium text-gray-900 hover:bg-gray-100" href="javascript:;">
														3 Adults
													</a>
												</li>
												<li>
													<a class="block px-6 py-2 font-medium text-gray-900 hover:bg-gray-100" href="javascript:;">
														4 Adults
													</a>
												</li>
												<li>
													<a class="block px-6 py-2 font-medium text-gray-900 hover:bg-gray-100" href="javascript:;">
														5 Adults
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="relative block w-full">

									</div>

								</div>
							</div>
							<button
								class="rounded-xl bg-white px-8 py-3.5 text-lg font-semibold text-emerald-600 transition-all duration-300 hover:bg-emerald-800 hover:text-white">Book
								Now</button>
						</div>
					</div>
					<div class="flex flex-col justify-between w-full max-lg:mt-16 max-lg:gap-10 lg:mt-16 lg:flex-row lg:items-center">
						<p class="max-w-2xl pr-10 text-base font-normal text-white max-lg:mx-auto max-lg:text-center">
							We embrace the allure of wanderlust, recognizing that everyone deserves the
							chance to embark on their own hotel adventure, discovering <br>
							comfort and style amidst new surroundings.
						</p>
						<div class="flex flex-col items-center gap-8 max-lg:justify-center min-[470px]:flex-row">
							<div class="block">
								<h4 class="font-manrope mb-2 text-4xl font-semibold leading-snug text-white max-[470px]:text-center">121+</h4>
								<p class="whitespace-nowrap text-base font-normal text-white max-[470px]:text-center">Capital Raised</p>
							</div>
							<div class="block">
								<h4 class="font-manrope mb-2 text-4xl font-semibold leading-snug text-white max-[470px]:text-center">90+</h4>
								<p class="whitespace-nowrap text-base font-normal text-white max-[470px]:text-center">Happy Customer</p>
							</div>
							<div class="block">
								<h4 class="font-manrope mb-2 text-4xl font-semibold leading-snug text-white max-[470px]:text-center">1.5K+</h4>
								<p class="whitespace-nowrap text-base font-normal text-white max-[470px]:text-center">Property Option</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<section class="relative p-5 bg-cover lg:h-full">
		<div class="relative z-0 p-24 overflow-hidden bg-cover rounded-3xl bg-[url('https://www.material-tailwind.com/image/gradient-bg.png')] bg-no-repeat">
			<p class="block font-sans text-sm antialiased font-light leading-normal text-white">
				Upcoming Events
			</p>
			<h3 class="block font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-white">
				Tech Summit: Shaping Tomorrow
			</h3>
			<p class="block mt-2 mb-6 font-sans text-base antialiased font-light leading-relaxed text-white text-inherit">
				Prepare to be part of dynamic conversations that will redefine the
				boundaries.
			</p>
			<button
				class="flex-shrink-0 select-none rounded-lg border border-gray-100 px-6 py-3 text-center align-middle font-sans text-xs font-bold uppercase text-gray-100 opacity-75 transition-all hover:opacity-100 focus:ring focus:ring-gray-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
				data-ripple-dark="true" type="button">
				join now
			</button>
		</div>
	</section>
    <section class="relative py-5 pb-8 lg:pt-0">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center h-auto grid-cols-1 gap-6 lg:grid-cols-12 xl:gap-24 lg:gap-16 lg:h-full">
          <div class="w-full pb-12 lg:col-span-6 lg:pb-0 md:order-first">
            <div class="text-center lg:text-left lg:max-w-xl">
              <h1
                class="relative pb-5 text-5xl font-bold leading-snug text-center text-indigo-900 font-manrope lg:text-left lg:pr-5">
                <span class="text-indigo-600">Register &amp; Unlock</span> the
                full potential of our tool
                <svg class="absolute max-lg:hidden -top-32 -right-20" xmlns="http://www.w3.org/2000/svg" width="221" height="211" viewBox="0 0 221 211" fill="none">
                  <path
                    d="M62.2261 93.0678C41.7341 90.3429 21.4375 85.0552 1.83731 79.9319L0.960363 82.8895C20.6626 88.0463 41.0462 93.3545 61.7109 96.0919C78.3783 98.3006 93.5569 98.623 107.674 97.0186C107.779 100.387 108.256 103.748 109.098 106.961C112.316 119.163 120.269 130.646 133.379 142.102C147.06 154.051 162.634 163.291 179.718 169.629L171.34 173.294L172.181 175.385L184.873 169.819L178.964 157.698L176.914 158.768L180.798 166.71C164.078 160.496 148.83 151.455 135.435 139.752C122.774 128.685 115.104 117.664 112.06 106.049C111.237 102.935 110.799 99.7713 110.735 96.6293C115.446 95.9983 120.045 95.1621 124.532 94.0921C130.619 92.6557 137.515 90.5248 142.602 85.6033C147.432 80.9506 150.49 72.5837 146.69 66.2436C144.288 62.2297 139.345 59.7922 134.097 60.0139C128.507 60.2679 123.828 63.1385 120.901 65.5275C115.21 70.1465 111.14 76.7114 109.085 84.5523C108.298 87.5876 107.848 90.7494 107.714 93.9387C93.7404 95.5583 78.7209 95.2641 62.2261 93.0678ZM122.688 67.9176C125.245 65.8366 129.311 63.3113 134.044 63.1094C137.147 62.9749 140.108 63.975 142.195 65.7763C142.915 66.3983 143.541 67.1299 144.027 67.9322C146.916 72.7483 144.496 79.6175 140.5 83.4874C135.957 87.8687 129.567 89.8081 123.905 91.147C119.601 92.1566 115.216 92.9869 110.719 93.5835C111.244 83.3569 115.526 73.7247 122.688 67.9176Z"
                    fill="#D1D5DB" />
                </svg>
              </h1>
              <p class="text-lg text-center text-gray-500 mb-9 lg:text-left">
                Get started with a free account. Experience the full potential
                of our cutting edge tool with no risk.
              </p>
              <div class="flex flex-col gap-5 lg:flex-row lg:mb-24">
                <a href="javascript:;"
                  class="flex items-center justify-center gap-2 px-5 py-4 text-base font-semibold text-indigo-600 transition-all duration-500 rounded-full bg-indigo-50 max-lg:w-full max-lg:max-w-2xl max-lg:mx-auto focus:outline-none hover:bg-indigo-100">
                  <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M14.4338 7.9962C16.656 9.2792 17.7671 9.9207 17.7671 10.883C17.7671 11.8452 16.656 12.4867 14.4338 13.7697L10 16.3295C7.77778 17.6125 6.66667 18.254 5.83333 17.7729C5 17.2918 5 16.0088 5 13.4428L5 8.32312C5 5.75712 5 4.47412 5.83333 3.99299C6.66667 3.51187 7.77778 4.15337 10 5.43637L14.4338 7.9962Z"
                      stroke="#4F46E5" stroke-width="2"></path>
                  </svg>

                  How it works
                </a>
              </div>
            </div>
          </div>
          <div class="w-full lg:col-span-6">
            <div class="p-5 bg-white border border-indigo-200 rounded-3xl lg:p-10 max-lg:max-w-2xl max-lg:mx-auto xl:ml-auto xl:max-w-lg lg:max-w-md">
              <form>
                <h4 class="mb-12 text-3xl font-bold text-gray-900">
                  Register Now
                </h4>
                <div class="block w-full">
                  <div class="relative mb-9">
                    <label class="flex items-center mb-2 text-sm font-medium text-gray-600">Name
                      <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z"
                          fill="#EF4444"></path>
                      </svg>
                    </label>
                    <input type="text" id="default-search"
                      class="block w-full h-14 px-5 py-2.5 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                      placeholder="Your full name.." required="" />
                  </div>
                  <div class="relative mb-9">
                    <label class="flex items-center mb-2 text-sm font-medium text-gray-600">Email
                      <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z"
                          fill="#EF4444"></path>
                      </svg>
                    </label>
                    <input type="text" id="default-search"
                      class="block w-full h-14 px-5 py-2.5 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                      placeholder="Your email id.." required="" />
                  </div>
                  <div class="relative mb-9">
                    <label class="flex items-center mb-2 text-sm font-medium text-gray-600">Phone Number
                      <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z"
                          fill="#EF4444"></path>
                      </svg>
                    </label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                      class="absolute z-10 inline-flex items-center flex-shrink-0 px-4 py-4 text-base font-medium text-center text-gray-900 bg-transparent"
                      type="button">
                      IN<svg class="ml-2" width="12" height="7" viewBox="0 0 12 7" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M1 1.5L4.58578 5.08578C5.25245 5.75245 5.58579 6.08579 6 6.08579C6.41421 6.08579 6.74755 5.75245 7.41421 5.08579L11 1.5"
                          stroke="#6B7280" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </button>
                    <div id="dropdown"
                      class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                          <a href="javascript:;"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Shopping</a>
                        </li>
                        <li>
                          <a href="javascript:;"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">../images</a>
                        </li>
                        <li>
                          <a href="javascript:;"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">News</a>
                        </li>
                        <li>
                          <a href="javascript:;"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Finance</a>
                        </li>
                      </ul>
                    </div>
                    <div class="relative">
                      <input type="text"
                        class="block w-full h-14 pr-5 pl-16 py-2.5 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none"
                        placeholder="+91 000 000 0000" />
                    </div>
                  </div>
                  <div class="flex items-center mb-12 cursor-pointer">
                    <input id="checkbox-small1" type="checkbox" value=""
                      class="appearance-none border border-gray-300 rounded-md mr-2 hover:border-indigo-500 hover:bg-indigo-100 checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100 checked:bg-[url('../public/../images/check-sm.png')] w-5 h-5" />
                    <label for="checkbox-small1" class="text-sm font-normal text-gray-600">I accept the Terms &amp;
                      Conditions</label>
                  </div>
                </div>
                <button
                  class="bg-indigo-600 shadow-[0px 1px 2px rgba(16, 24, 40, 0.05)] rounded-full w-full h-14 text-lg text-white font-semibold cursor-pointer transition-all duration-500 hover:bg-indigo-700">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
@include('layouts.footer')
