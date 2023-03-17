<x-guest-layout>
    <div
        class="w-full p-4 md:w-1/2"
        @if ($errors->any() && old('private_person') == "on")
            x-data="{ show: false }"
        @else
            x-data="{ show: true }"
        @endif
    >
        <div class="w-full p-7 bg-white">
            <div class="mb-5 text-2xl text-gray-600 dark:text-gray-400 leading-[1.4]">
                <h3>Register</h3>
            </div>

            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                <fieldset>
                    <div class="flex flex-col mb-2">
                        <div class="grid grid-cols-1 w-full md:grid-cols-2 gap-4">
                            <div class="inline-block max-w-full">
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Name*" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div class="inline-block max-w-full">
                                <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" placeholder="Surname*" :value="old('surname')" required autocomplete="surname" />
                                <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                            </div>
                            <div class="inline-block max-w-full">
                                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" placeholder="Phone" :value="old('phone')" autocomplete="phone" />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                        </div>
                        <div class="flex flex-row-reverse justify-end items-center mt-4">
                            <label for="private_person" class="ml-2 text-sm text-gray-600 select-none peer hover:cursor-pointer">
                                {{ __('I am a private person') }}
                            </label>
                            <input type="hidden" name="private_person" x-bind:value="show ? 'off' : 'on'" />
                            <input
                                type="checkbox"
                                id="private_person"
                                name="private_person"
                                x-bind:value="show ? 'off' : 'on'"
                                class="w-4 h-4 border border-gray-300 focus:outline-none focus:ring-offset-0 focus:ring-offset-transparent focus:ring-transparent focus:border-2 focus:border-indigo-300 peer-hover:border-indigo-300"
                                @click="show = !show"
                                @checked(old('private_person') == 'on')
                            />
                        </div>
                    </div>
                </fieldset>
                <fieldset x-show="show" style="display: none;">
                    <div class="grid grid-cols-1 w-full gap-4">
                        <div class="inline-block max-w-full">
                            <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" placeholder="Company*" :value="old('company')" />
                            <x-input-error :messages="$errors->get('company')" class="mt-2" />
                        </div>
                        <div class="inline-block max-w-full">
                            <x-text-input id="company_reg_number" class="block mt-1 w-full" type="text" name="company_reg_number" placeholder="Company reg. number*" :value="old('company_reg_number')" />
                            <x-input-error :messages="$errors->get('company_reg_number')" class="mt-2" />
                        </div>
                        <div class="inline-block max-w-full">
                            <x-text-input id="vat_number" class="block mt-1 w-full" type="text" name="vat_number" placeholder="VAT number" :value="old('vat_number')" />
                            <x-input-error :messages="$errors->get('vat_number')" class="mt-2" />
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="grid grid-cols-2 gap-y-4 w-full md:grid-cols-4 md:gap-4 mt-4">
                        <div class="inline-block max-w-full col-span-2">
                            <select
                                name="country"
                                id="country"
                                required
                                class="block mt-1 w-full relative border-[#e5e5e5] focus:border-indigo-100 focus:ring-indigo-300 shadow-sm"
                            >
                                <option disabled selected value=""> {{ __('Country*') }}</option>
                                @if (count($countries) !== 0)
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->name }}" @selected(old('country') == $country->name)>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>
                        <div class="inline-block max-w-full col-span-2">
                            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" placeholder="City*" :value="old('city')" required autocomplete="city" />
                            <x-input-error :messages="$errors->get('city')" class="mt-2" />
                        </div>
                        <div class="inline-block max-w-full col-span-2 md:col-span-3">
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" placeholder="Address*" :value="old('address')" autocomplete="address" />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                        <div class="inline-block max-w-full col-span-2 md:col-span-1">
                            <x-text-input id="zip" class="block mt-1 w-full" type="number" name="zip" placeholder="Zip*" :value="old('zip')" autocomplete="zip" />
                            <x-input-error :messages="$errors->get('zip')" class="mt-2" />
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="grid grid-cols-1 w-full gap-4 mt-4">
                        <div class="inline-block max-w-full">
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="E-mail*" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="inline-block max-w-full">
                            <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="Password*"
                                required autocomplete="new-password"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="inline-block max-w-full">
                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                placeholder="Password confirmation*"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                            />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="relative top-[-10px] inline-block max-w-full">
                            <p class="text-gray-400 text-xs">Must be at least 8 characters long</p>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="grid grid-cols-1 w-full gap-2 mt-2">
                        <div class="flex flex-row-reverse justify-end items-center">
                            <label for="agreement" class="ml-2 text-sm text-gray-600 select-none peer hover:cursor-pointer">
                                {{ __('I agree with this site ') }}
                                <a class="text-sm text-blue-500 hover:text-blue-900 hover:underline focus:underline focus:outline-none" href="#">
                                    {{ __('Private Policy') }}
                                </a>
                            </label>
                            <input
                                type="checkbox"
                                id="agreement"
                                name="agreement"
                                class="w-4 h-4 border border-gray-300 focus:outline-none focus:ring-offset-0 focus:ring-offset-transparent focus:ring-transparent focus:border-2 focus:border-indigo-300 peer-hover:border-indigo-300"
                                @checked(old('agreement'))
                            />
                        </div>
                        <x-input-error :messages="$errors->get('agreement')" class="mt-2" />
                    </div>
                </fieldset>

                <div class="mt-4">
                    <x-primary-button class="w-32 leading-[1.5rem]">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

    </div>

</x-guest-layout>
