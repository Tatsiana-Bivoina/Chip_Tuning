<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center px-4 py-2 !bg-[#f0506e] border border-transparent rounded-full text-sm text-white uppercase tracking-widest hover:bg-[#ee395b] focus:bg-[#ee395b] active:bg-[#ee395b] focus:ring-offset-0 focus:ring-offset-transparent focus:ring-transparent focus:outline-0 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
