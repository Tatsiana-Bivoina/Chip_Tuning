@extends('layouts.vehicle-list')

@section('vehicle-list-content')
    <section class="py-[70px]">
        <div class="relative sm:mx-auto max-w-[1200px] px-5 sm:px-10 mt-24">
            <div class="flex items-center">
                <div class="w-11 h-11 mr-5 grayscale flex items-center">
                    <img src="{{ Vite::asset($carBrand->brand_logo) }}" alt="brand logo">
                </div>
                <h1 class="text-[2.23rem] md:text-[2.625rem] leading-[1.2] text-[#333] font-sans font-normal">
                    {{ $carBrand->brand_name }}
                </h1>
            </div>
            <div class="mt-3">
                <ul class="flex items-center">
                    <li>
                        <x-breadcrumb-nav-link :href="route('home.index')">
                            {{ __('Home') }}
                        </x-breadcrumb-nav-link>
                        <span class="text-[#999] mx-[16px]">/</span>
                    </li>
                    <li>
                        <x-breadcrumb-nav-link :href="route('vehicleList.index')">
                            {{ __('Vehicle List') }}
                        </x-breadcrumb-nav-link>
                        <span class="text-[#999] mx-[16px]">/</span>
                    </li>
                    <li class="text-[#999] last:text-[#666] text-sm">
                        <span>{{ $currentPage }}</span>
                    </li>
                </ul>
            </div>
            <div class="mt-8">
                <ul>
                    @if (count($carModels) === 0)
                        <li class="text-center text-[#666] font-sans m-10 lg:m-16">No data</li>
                    @else
                        @foreach ($carModels as $elem)
                            <li class="mb-3"><a href="" class="text-[#666] font-sans font-normal text-base hover:text-[#999] hover:underline focus:outline-dotted focus:outline-[#999] focus:outline-2 transition duration-150 ease-in-out">
                                {{ $elem->model_name }}&nbsp;
                                {{ $elem->release_years }}
                                <span> -> ...</span>
                            </a></li>
                        @endforeach
                    @endif

                </ul>
            </div>
        </div>
    </section>
@endsection
