
<li class="nav-item">
    <a {{ $attributes }} class="{{ $active ? 'bg-gray-700' : ' hover:bg-gray-700' }} rounded-md px-3 py-2 text-sm"
    aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>
</li>
