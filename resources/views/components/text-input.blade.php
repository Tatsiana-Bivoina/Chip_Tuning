@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'relative border-[#e5e5e5] focus:border-indigo-100 focus:ring-indigo-300 shadow-sm placeholder:text-slate-400']) !!}>
