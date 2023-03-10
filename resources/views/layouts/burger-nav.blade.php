<div
    x-show="show"
    x-transition:enter="transition linear duration-[0.7s]"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition linear duration-[0.7s]"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    @click.outside="show = false"
    @close.stop="show = false"
    class="fixed top-0 right-0 left-auto bottom-0 z-[100]"
>
    <div class="bg-[#222] absolute right-0 top-0 w-60 sm:hidden h-screen p-5 grid grid-cols-1 divide-y divide-gray-400 auto-rows-max">
        <div class="pb-2 relative">
            <button class="absolute right-0 top-0" @click="show = false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="member-area-icon">
                    <path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/>
                </svg>
            </button>
            <h6 class="text-sm text-white uppercase mb-3">Navigation</h6>
            <nav>
                <ul class="grid gap-2">
                    <li>
                        <x-nav-link :href="route('home.index')" :active="request()->routeIs('home.index')" class="capitalize">
                            {{ __('Home') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('vehicleList.index')" :active="request()->routeIs('vehicleList.index')" class="capitalize">
                            {{ __('Vehicle List') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('chiptuningService.index')" :active="request()->routeIs('chiptuningService.index')" class="capitalize">
                            {{ __('Chiptuning services') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('pricing.index')" :active="request()->routeIs('pricing.index')" class="capitalize">
                            {{ __('Pricing') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('contacts.index')" :active="request()->routeIs('contacts.index')" class="capitalize">
                            {{ __('Contact us') }}
                        </x-nav-link>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="pt-6">
            <h6 class="text-sm text-white uppercase mb-3">Member area</h6>
            <nav>
                <ul class="grid gap-2">
                    @auth
                        <li>
                            <x-nav-link class="capitalize">
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <x-nav-link class="capitalize">
                                {{ __('Profile') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-nav-link :href="route('logout')" class="capitalize" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-nav-link>
                            </form>
                        </li>
                    @else
                        <li>
                            <x-nav-link :href="route('login')" class="capitalize">
                                {{ __('Login') }}
                            </x-nav-link>
                        </li>
                    @if (Route::has('register'))
                        <li>
                            <x-nav-link :href="route('register')" class="capitalize">
                                {{ __('Register') }}
                            </x-nav-link>
                        </li>
                    @endif

                    @endauth
                </ul>
            </nav>
        </div>
    </div>
</div>
