<x-guest-layout>
    <div class="w-[300px]">
        <h3 class="text-2xl font-normal text-[#333] mb-5 leading-[1.4]">Reset Password</h3>
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="relative mt-3">
                <span class="absolute w-10 h-10 right-0 left-auto bottom-0 top-0 inline-flex justify-center items-center pointer-events-none z-[1]">
                    <x-icons.user-icon />
                </span>
                <x-text-input id="email" class="block mt-1 w-full pr-10" type="email" name="email" placeholder="E-Mail Address" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="relative mt-3">
                <span class="absolute w-10 h-10 right-0 left-auto bottom-0 top-0 inline-flex justify-center items-center pointer-events-none z-[1]">
                    <x-icons.password-icon />
                </span>
                <x-text-input id="password" class="block mt-1 w-full pr-10" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="relative mt-3">
                <span class="absolute w-10 h-10 right-0 left-auto bottom-0 top-0 inline-flex justify-center items-center pointer-events-none z-[1]">
                    <x-icons.password-icon />
                </span>
                <x-text-input id="password_confirmation" class="block mt-1 w-full pr-10"
                                    type="password"
                                    placeholder="Confirm Password"
                                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-3">
                <x-primary-button class="w-full leading-[1.5rem]">
                    {{ __('Reset Password') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
