<header x-data="{ show: false }" class="relative flex flex-col bg-black/[.7]">
    @include('layouts.navigation-top')

    <div
        @scroll.window="atTop = (window.pageYOffset < 80) ? false : true"
        class="right-0 left-0 min-h-[80px] z-[99]"
        :class="atTop ? 'fixed top-0 bg-[#222]' : 'absolute top-0 sm:top-[50px]'"
    >
        <nav class="px-6 relative flex justify-between items-center min-h-[inherit]">
            <div>
                <ul class="flex items-center">
                    <li>
                        <x-nav-link :href="route('home.index')" :active="request()->routeIs('home.index')">
                            {{ __('logo') }}
                        </x-nav-link>
                    </li>
                </ul>
            </div>

            <div class="hidden sm:block">
                <ul class="flex items-center gap-4 md:gap-8">
                    <li>
                        <x-nav-link :href="route('home.index')" :active="request()->routeIs('home.index')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('vehicleList.index')" :active="request()->routeIs('vehicleList.index')">
                            {{ __('Vehicle List') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('chiptuningService.index')" :active="request()->routeIs('chiptuningService.index')">
                            {{ __('Chiptuning services') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('pricing.index')" :active="request()->routeIs('pricing.index')">
                            {{ __('Pricing') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('contacts.index')" :active="request()->routeIs('contacts.index')">
                            {{ __('Contact us') }}
                        </x-nav-link>
                    </li>
                </ul>
            </div>
            <div class="block sm:hidden">
                <button @click="show = true" type="button" class="text-gray-500 focus:outline-none focus:right-0 group">
                    <svg class="w-6 h-6 group-hover:fill-white group-focus:fill-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        </nav>
    </div>

    @include('layouts.burger-nav')
</header>
