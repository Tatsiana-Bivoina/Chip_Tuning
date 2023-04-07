@extends('layouts.vehicle-list')

@section('vehicle-list-content')
    <section class="py-[70px]">
        <div class="relative sm:mx-auto max-w-[1200px] px-5 sm:px-10 mt-24">
            <h1 class="text-[2.23rem] md:text-[2.625rem] leading-[1.2] text-[#333] font-sans font-normal">Vehicle List</h1>
            <div class="mt-3">
                <ul class="flex items-center">
                    <li>
                        <x-breadcrumb-nav-link :href="route('home.index')">
                            {{ __('Home') }}
                        </x-breadcrumb-nav-link>
                        <span class="text-[#999] mx-[16px]">/</span>
                    </li>
                    <li class="text-[#999] last:text-[#666] text-sm">
                        <span>{{ __('Vehicle List') }}</span>
                    </li>
                </ul>
            </div>
            <div class="mt-8">
                <h4 class="text-2xl leading-[1.4] text-[#333] font-sans font-normal mb-5">Brands</h4>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
                    @foreach ($carBrands as $elem)
                        <div class="relative flex items-center justify-center shadow-[0_5px_15px_rgba(0,0,0,.08)] h-[60px] hover:cursor-pointer hover:shadow-[0_14px_25px_rgba(0,0,0,.16)] group transition-shadow !ease-out !duration-700">
                            <button class="flex items-center justify-center group-hover:opacity-20 transition-opacity !ease-out !duration-700">
                                <div class="w-5 h-auto mr-2">
                                    <img src="{{ Vite::asset($elem['brand_logo']) }}" alt="Logo" class="grayscale object-contain">
                                </div>
                                {{ $elem['brand_name'] }}
                            </button>
                            <a
                                href={{ route('vehicleList.show', ['brand' => str_contains($elem['brand_name'], ' ') ? strtolower(str_replace(' ', '-', $elem['brand_name'])) : strtolower($elem['brand_name'])]) }}
                                class="absolute opacity-0 group-hover:opacity-100 text-white bg-[#f0506e] rounded-full px-4 text-sm !leading-[28px] transition-opacity !ease-out !duration-700"
                            >
                                Open
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
