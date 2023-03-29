@extends('layouts.main')

@section('content')

    @yield('vehicle-list-content')

    <section class="py-10 sm:py-[70px]">
        <div class="sm:mx-auto max-w-[1200px] px-8 sm:px-10">
            <div class="bg-[#fafafa] mb-4 p-8">
                <h2 class="text-4xl md:text-[2rem] leading-[1.3] text-[#333] font-sans font-bold text-left mb-6">Dyno and Road Tested ECU FILES</h2>
                <p class="text-[#666] text-base font-normal font-sans text-left">
                    ECUMAP is a file service of ECU tuning files with the best results and solutions in the market. Our Chiptuning files are optimized on the road and later tested on dyno to get the maximum results you are looking for. We provide improved power, torque and fuel consumption for all petrol and diesel engines.
                </p>
            </div>
            <div class="flex gap-y-3 xl:gap-[4%] flex-col xl:flex-row">
                <div class="w-full xl:w-[48%]">
                    <a href="https://www.youtube.com/watch?v=WB4Z29jj7qA&ab_channel=ECUMAPChiptuning" target="blank">
                        <img src="{{ Vite::asset('resources/images/video-plug-3.jpg') }}" alt="video image">
                    </a>
                </div>
                <div class="w-full xl:w-[48%]">
                    <a href="https://www.youtube.com/watch?v=dZMIwkKniNY&ab_channel=ECUMAPChiptuning" target="blank">
                        <img src="{{ Vite::asset('resources/images/video-plug-4.jpg') }}" alt="video image" class="float-right">
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
