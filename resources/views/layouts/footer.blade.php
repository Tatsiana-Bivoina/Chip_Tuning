<footer class="bg-[#222] pt-[70px] w-full">
    <div class="sm:container sm:mx-auto xl:max-w-7xl px-4 sm:px-0 grid sm:grid-cols-2 lg:grid-cols-4">
        <div class="pr-3 sm:mb-5">
            <x-footer-title>Site navigation</x-footer-title>
            <ul class="grid gap-2.5">
                <li>
                    <x-footer-nav-link :href="route('home.index')" :active="request()->routeIs('home.index')">
                        {{ __('Home') }}
                    </x-footer-nav-link>
                </li>
                <li>
                    <x-footer-nav-link :href="route('vehicleList.index')" :active="request()->routeIs('vehicleList.index')">
                        {{ __('Vehicle List') }}
                    </x-footer-nav-link>
                </li>
                <li>
                    <x-footer-nav-link :href="route('chiptuningService.index')" :active="request()->routeIs('chiptuningService.index')">
                        {{ __('Chiptuning services') }}
                    </x-footer-nav-link>
                </li>
                <li>
                    <x-footer-nav-link :href="route('pricing.index')" :active="request()->routeIs('pricing.index')">
                        {{ __('Pricing') }}
                    </x-footer-nav-link>
                </li>
                <li>
                    <x-footer-nav-link :href="route('contacts.index')" :active="request()->routeIs('contacts.index')">
                        {{ __('Contact us') }}
                    </x-footer-nav-link>
                </li>
            </ul>
        </div>
        <div class="pr-3 sm:mb-5">
            <x-footer-title>Site information</x-footer-title>
            <ul class="grid gap-2.5">
                <li>
                    <x-footer-nav-link>
                        {{ __('Terms & conditions') }}
                    </x-footer-nav-link>
                </li>
                <li>
                    <x-footer-nav-link>
                        {{ __('Privacy policy') }}
                    </x-footer-nav-link>
                </li>
                <li>
                    <x-footer-nav-link>
                        {{ __('Sitemap') }}
                    </x-footer-nav-link>
                </li>
            </ul>
        </div>
        <div class="pr-3 sm:mb-5">
            <x-footer-title>We serve car brands</x-footer-title>
            <ul class="flex flex-wrap gap-2.5">
                @foreach ($randomCarBrands as $carBrand)
                    <li>
                        <a href="" class="inline-block text-[#666] bg-white rounded-sm text-sm leading-6 px-2 uppercase whitespace-nowrap hover:text-gray-400 focus:outline-dotted focus:outline-white focus:outline-2">
                            {{ $carBrand['brand_name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="pr-3 sm:mb-5">
            <x-footer-title>Our working hours</x-footer-title>
            <div class="flex">
                <div class="mr-4">
                    @foreach ($days as $day)
                        <p class="text-sm font-sans text-[hsla(0,0%,100%,.7)]">{{ $day }}</p>
                    @endforeach
                </div>
                <div>
                    @foreach ($workingHours as $workingHour)
                        <p class="text-sm font-sans text-[hsla(0,0%,100%,.7)]">{{ $workingHour }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="p-10 text-center">
        <p class="text-gray-400">© 2023 SiteName.com | All rights reserved</p>
    </div>
</footer>
