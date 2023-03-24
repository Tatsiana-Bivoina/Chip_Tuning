<div class="sm:absolute sm:top-0 sm:right-0 sm:left-0 min-h-[80px] z-[99] hidden sm:block" x-bind:style="currentPage !== '/' && { backgroundColor: '#222' }">
    <nav class="px-6 relative flex justify-between items-center min-h-[inherit]">
        @if (Route::has('login'))
            <div>
                <ul class="flex items-center">
                    <li>
                        <x-nav-link href="mailto:name@site.ru" class="group font-black">
                            <svg viewBox="0 0 512 512" class="member-area-icon group-hover:fill-white group-focus:fill-white"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg>
                            {{ __('Email us') }}
                        </x-nav-link>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="flex gap-4 md:gap-8">
                    @auth
                        <li>
                            <x-nav-link :href="route('memberArea.index')" :active="request()->routeIs('memberArea.index')" class="group font-black">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="member-area-icon group-hover:fill-white group-focus:fill-white">
                                    <path d="M317.4 44.6c5.9-13.7 1.5-29.7-10.6-38.5s-28.6-8-39.9 1.8l-256 224C.9 240.7-2.6 254.8 2 267.3S18.7 288 32 288H143.5L66.6 467.4c-5.9 13.7-1.5 29.7 10.6 38.5s28.6 8 39.9-1.8l256-224c10-8.8 13.6-22.9 8.9-35.3s-16.6-20.7-30-20.7H240.5L317.4 44.6z"/>
                                </svg>
                                {{ __('Member area') }}
                            </x-nav-link>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit">
                                    <x-nav-link class="group font-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="member-area-icon group-hover:fill-white group-focus:fill-white">
                                            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                                        </svg>
                                        {{ __('Log Out') }}
                                    </x-nav-link>
                                </button>
                            </form>
                        </li>
                    @else
                        <li>
                            <x-nav-link :href="route('login')" class="group font-black">
                                <svg viewBox="0 0 512 512" class="member-area-icon group-hover:fill-white group-focus:fill-white">
                                    <path d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>
                                </svg>
                                {{ __('Login') }}
                            </x-nav-link>
                        </li>
                    @if (Route::has('register'))
                        <li>
                            <x-nav-link :href="route('register')" class="group font-black">
                                <svg viewBox="0 0 576 512" class="member-area-icon group-hover:fill-white group-focus:fill-white">
                                    <path d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z"/>
                                </svg>
                                {{ __('Register') }}
                            </x-nav-link>
                        </li>
                    @endif
                </ul>
                @endauth
            </div>
        @endif
    </nav>
</div>
