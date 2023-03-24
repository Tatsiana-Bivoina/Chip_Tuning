<x-guest-layout>
    <div class="max-w-[270px]">
        <div class="mb-4 text-2xl text-gray-600 dark:text-gray-400 leading-[1.4]">
            <h3>Reset Password</h3>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="relative mt-4">
                <span class="absolute w-10 h-10 right-0 left-auto bottom-0 top-0 inline-flex justify-center items-center pointer-events-none z-[1]">
                    <x-icons.user-icon />
                </span>
                <x-text-input id="email" class="block mt-1 w-full pr-10" type="email" name="email" placeholder="E-Mail Address" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center mt-4">
                <x-primary-button class="w-full leading-5">
                    {{ __('Send Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
