@extends('layouts.main')

@section('content')

    <section
        x-data="{ elemPosition: 0, elemPaddingTop: 70, scrollToSection() { window.scrollBy(0,this.elemPosition-this.elemPaddingTop) } }"
        x-init="elemPosition = document.getElementById('spotlights').getBoundingClientRect().top+window.pageYOffset"
        class="relative h-[80vh] min-h-[460px] bg-[url('../images/main-bg.jpg')] bg-no-repeat bg-cover bg-center overflow-hidden before:content-[''] before:absolute before:bg-black/[.5] before:z-[1] before:top-0 before:bottom-0 before:left-0 before:right-0"
    >
        <div class="relative top-[40%] sm:top-[30%] sm:mx-auto max-w-[1200px] px-5 sm:px-10">
            <div class="relative w-full sm:w-1/2 z-10">
                <h1 class="animate-textAppearenceFirst uppercase text-white text-4xl md:text-[2.6rem] leading-[1.2] font-sans font-bold mb-5">online ecu file service</h1>
                <p class="hidden sm:block font-sans animate-textAppearenceSecond text-white text-[1.2em] font-light opacity-70 mb-5">
                    10+ Years of experience is all what you were looking for! We offer dyno and road tested chiptuning files individually developed by our team. Fast, simple and guaranteed results. Join us!
                </p>
                <x-primary-link :href="route('register')" class="animate-textAppearenceThird w-[120px]">
                    {{ __('Register') }}
                </x-primary-link>
            </div>
        </div>
        <div class="absolute bottom-[5%] left-1/2 translate-x-[-50%] translate-y-[-5%] z-10">
            <button @click="scrollToSection"><x-icons.arrow-down-icon></x-icons.arrow-down-icon></button>
        </div>
    </section>
    <section class="relative bg-[url('../images/module-bg.png')] bg-[50% 0] bg-no-repeat bg-contain py-10 sm:py-[70px]">
        <div class="sm:mx-auto max-w-[1200px] px-8 sm:px-10">
            <div class="p-8 bg-white shadow-[0_5px_15px_rgba(0,0,0,.08)]">
                <h3 class="text-[#333] text-2xl leading-[1.4] mb-5">Compare file tuning options for your vehicle</h3>
                <div>
                    <form action="" method="GET">
                        <div class="grid gap-y-4 w-full md:grid-cols-3 md:gap-4 mt-4">
                            <div class="w-full">
                                <x-input-label class="text-[#999]">Make</x-input-label>
                                <select
                                    name="brand"
                                    id="brand"
                                    required
                                    class="relative block h-10 w-full mt-5 md:mt-0 bg-white text-[#666] px-3 border-[#e5e5e5] focus:border-indigo-100 focus:ring-indigo-300 shadow-sm"
                                >
                                    <option disabled selected value=""> {{ __('Select') }}</option>
                                </select>
                            </div>
                            <div class="w-full">
                                <x-input-label class="text-[#999]">Model / Generation</x-input-label>
                                <select
                                    name="model"
                                    id="model"
                                    disabled
                                    class="relative block h-10 w-full mt-5 md:mt-0 bg-white disabled:bg-[#f8f8f8] text-[#666] px-3 border-[#e5e5e5] focus:border-indigo-100 focus:ring-indigo-300 shadow-sm"
                                >
                                    <option disabled selected value=""> {{ __('Select') }}</option>
                                </select>
                            </div>
                            <div class="w-full">
                                <x-input-label class="text-[#999]">Engine</x-input-label>
                                <select
                                    name="engine"
                                    id="engine"
                                    disabled
                                    class="relative block h-10 w-full mt-5 md:mt-0 bg-white disabled:bg-[#f8f8f8] text-[#666] px-3 border-[#e5e5e5] focus:border-indigo-100 focus:ring-indigo-300 shadow-sm"
                                >
                                    <option disabled selected value=""> {{ __('Select') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-5">
                            <x-primary-button class="w-32 leading-[38px] tracking-normal">
                                {{ __('Find a file') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="spotlights" class="py-10 sm:py-[70px]">
        <div class="sm:mx-auto max-w-[1200px] px-8 sm:px-10">
            <h5 class="uppercase text-[#1e87f0] text-center">In 4 simple steps</h5>
            <h2 class="text-3xl md:text-[2rem] text-center mb-5 mt-[10px] text-[#333]">How it works?</h2>
            <div x-data="buttons()">
                <ul class="flex items-center justify-center">
                    <template x-for="elem in buttons" :key="elem.id">
                        <li class="ml-5 first-of-type:ml-0">
                            <button
                                x-text="elem.title"
                                class="flex items-center justify-center w-[35px] h-[35px] rounded-full transition duration-150 ease-in-out"
                                @click="toggleActiveClass(elem.id)"
                                :class="elem.isActive ? 'bg-[#1e87f0] text-white focus:outline-0' : 'bg-black/[.06] text-[#999] text-sm hover:bg-[#f8f8f8] hover:text-[#666] focus:outline-0 focus:bg-[#f8f8f8] focus:text-[#666]'"
                            ></button>
                        </li>
                    </template>
                </ul>
                <ul class="block mt-5">
                    <template x-for="el in blocks" :key="el.id">
                        <li x-show="activeId == el.id ? true : false">
                            <div class="flex flex-col xl:flex-row">
                                <div x-html="el.image" class="w-full xl:w-1/2 pl-7 xl:pl-10 animate-moveFromLeft"></div>
                                <div class="flex items-center w-full xl:w-1/2 pl-7 xl:pl-10 mt-8 xl:mt-0 animate-moveFromRight">
                                    <div>
                                        <h3 x-text="el.title" class="mt-3 mb-5 text-2xl text-[#333] leading-[1.4] font-normal font-sans"></h3>
                                        <p x-text="el.text" class="text-lg opacity-70 font-light font-sans"></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </section>
    <section class="py-10 sm:py-[70px]">
        <div class="sm:mx-auto max-w-[1200px] px-8 sm:px-10">
            <div class="bg-[#fafafa] mb-4 py-10">
                <h2 class="text-[1.7rem] md:text-[2rem] leading-[1.3] text-center text-[#333] font-sans font-bold">ECU Tuning Files from ECUMAP.COM</h2>
            </div>
            <div class="grid md:grid-cols-3">
                @foreach ($ecuTuningFiles as $elem)
                    <p class="text-[#666] text-base font-black font-sans">&#187; {{ $elem->title }}</p>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-10 sm:py-[70px]">
        <div class="sm:mx-auto max-w-[1200px] px-8 sm:px-10">
            <div class="bg-[#fafafa] mb-4 p-8">
                <h2 class="text-4xl md:text-[2rem] leading-[1.3] text-[#333] font-sans font-bold text-left mb-6">Learn more about ECUMAP</h2>
                <p class="text-[#666] text-base font-normal font-sans text-left">
                    ECUMAP.COM is a file service of ECU tuning files with the best results and solutions in the market. Our Chiptuning files are optimized on the road and later tested on dyno to get the maximum results you are looking for. We provide improved power, torque and fuel consumption for all petrol and diesel engines.
                </p>
            </div>
            <div class="flex gap-y-3 xl:gap-[4%] flex-col xl:flex-row">
                <div class="w-full xl:w-[48%]">
                    <a href="https://www.youtube.com/watch?v=Ai8tuAgB_5Y&ab_channel=ECUMAPChiptuning" target="blank">
                        <img src="{{ Vite::asset('resources/images/video-plug-1.jpg') }}" alt="video image">
                    </a>
                </div>
                <div class="w-full xl:w-[48%]">
                    <a href="https://www.youtube.com/watch?v=iPfOOGeTKe4&ab_channel=ECUMAPChiptuning" target="blank">
                        <img src="{{ Vite::asset('resources/images/video-plug-2.jpg') }}" alt="video image" class="float-right">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

<script>
    function buttons() {
        return {
            buttons: [
                { id: 1, title: '1', isActive: true },
                { id: 2, title: '2', isActive: false },
                { id: 3, title: '3', isActive: false },
                { id: 4, title: '4', isActive: false }
            ],
            blocks: [
                { id: 1, title: 'Create a free account', image: '<img src="{{ Vite::asset('resources/images/step_1.png') }}" alt="step"/>', text: 'Start with a free registration. It will only take a couple of minutes. No credit card or any pre-payment is needed.' },
                { id: 2, title: 'Buy credits', image: '<img src="{{ Vite::asset('resources/images/step_2.png') }}" alt="step"/>', text: 'Purchase credits to start placing your ECU file requests. All transactions are securaly processed by PayPal. Use our electronic invoicing system. Track all your previous purchases in a history log.' },
                { id: 3, title: 'Upload an original file', image: '<img src="{{ Vite::asset('resources/images/step_3.png') }}" alt="step"/>', text: 'Upload and store the original ECU file. Communicate with an assigned ticket manager. Track each ticket progress. Review all current and previous tickets.' },
                { id: 4, title: 'Download the tuning file', image: '<img src="{{ Vite::asset('resources/images/step_4.png') }}" alt="step"/>', text: 'Get a notification directly to your email once your tuning file is ready. Review a ticket details. Download the file. Return any time you want - the file will be securely stored for an unlimited time.' }
            ],
            activeId: 1,
            toggleActiveClass: function (id) {
                this.activeId = id;
                const activeElem = this.buttons.find((button) => button.id === id);
                activeElem.isActive = true;
                const otherElements = this.buttons.filter((elem) => elem.id !== id);
                otherElements.forEach((element) => {
                    element.isActive = false;
                });
            },
        };
  }
</script>
