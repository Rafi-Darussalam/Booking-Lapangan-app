<div class="py-2 px-3 rounded-lg overflow-hidden w-full {{ request()->is(ltrim($attributes->get('href'), '/')) ? 'bg-[#0052FF]' : 'bg-none' }}">
    <x-navbar-navlink href="{{ $attributes->get('href') }}"
        class="{{ request()->is(ltrim($attributes->get('href'), '/')) ? 'text-white' : 'text-black' }} flex gap-2">{{ $slot }}</x-navbar-navlink>
</div>
