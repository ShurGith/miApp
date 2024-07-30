@include('layouts.header')
<main class="">
    <section>
        <div
            class="p-10 rounded-l-xl border border-blue-gray-100 bg-[url('https://www.material-tailwind.com/image/gradient-bg.png')] rounded-xl bg-no-repeat  bg-cover">
            <p class="block antialiased font-sans text-sm font-light leading-normal text-white font-bold mb-2">
                Upcoming Events
            </p>
            <h3 class="block antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-white">
                Tech Summit: Shaping Tomorrow
            </h3>
            <p
                class="block antialiased font-sans text-base font-light leading-relaxed text-inherit mt-2 mb-6 !text-base font-normal text-white">
                Prepare to be part of dynamic conversations that will redefine the
                boundaries.
            </p>
            <button
                class="align-middle select-none font-sans opacity-75 font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-gray-100 text-gray-100 hover:opacity-100 focus:ring focus:ring-gray-100 active:opacity-[0.85] flex-shrink-0"
                type="button" data-ripple-dark="true">
                join now
            </button>
        </div>
    </section>
</main>
@include('layouts.footer')
