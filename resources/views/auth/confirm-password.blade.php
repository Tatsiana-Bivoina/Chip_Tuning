<x-guest-layout>
    <section class="max-w-[500px] shadow-[0_0_25px_5px_rgba(0,0,0,0.3)] p-10">
        <div class="mb-4 text-base text-gray-600">
            <h3>{{ __('This is a secure area of the application.') }}</h3>
            <h3>{{ __('Please confirm your password before continuing.') }}</h3>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('password.confirm') }}" class="w-full">
                @csrf

                <!-- Password -->
                <div>
                    <span class="absolute w-10 h-10 right-0 left-auto bottom-0 top-0 inline-flex justify-center items-center pointer-events-none z-[1]">
                        <x-icons.password-icon />
                    </span>

                    <x-text-input id="password" class="block mt-1 w-full pr-10"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-center mt-4">
                    <x-primary-button class="w-[80%] leading-[1.5rem]">
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </section>
</x-guest-layout>
