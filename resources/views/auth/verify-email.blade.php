<x-guest-layout>
    <section class="max-w-[500px] shadow-[0_0_25px_5px_rgba(0,0,0,0.3)] p-10">
        <div class="mb-4 text-base text-gray-600">
            <h3>{{ __('Thanks for signing up!') }}</h3>
            <h3>{{ __('Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}</h3>
            <h3>{{ __('If you didn\'t receive the email, we will gladly send you another.') }}</h3>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                <h3>{{ __('A new verification link has been sent to the email address you provided during registration.') }}</h3>
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </section>
</x-guest-layout>
