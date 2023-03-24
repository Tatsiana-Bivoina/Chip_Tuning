<x-guest-layout>
    <div class="max-w-[300px]">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="relative mt-4">
                <span class="absolute w-10 h-10 right-0 left-auto bottom-0 top-0 inline-flex justify-center items-center pointer-events-none z-[1]">
                    <x-icons.user-icon />
                </span>
                <x-text-input id="email" class="block mt-1 w-full pr-10" type="email" name="email" placeholder="E-Mail Address" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="relative mt-4">
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

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center group hover:cursor-pointer">
                    <x-input-checkbox name="remember" id="remember_me" class="group-hover:border-indigo-300" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="mt-4">
                <x-primary-button class="w-full leading-[1.5rem]">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            <div class="flex justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-500 hover:text-blue-900 hover:underline focus:underline focus:outline-none" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div class="flex justify-center mt-1">
                <p class="text-sm text-gray-600">Don't have an account yet?&nbsp;</p>
                <a href="{{ route('register') }}" class="text-sm text-blue-500 hover:text-blue-900 hover:underline focus:underline focus:outline-none">Register now</a>
            </div>
        </form>
    </div>
</x-guest-layout>
