@props(['href', 'user'])
@php
@endphp
<a href={{ $href }} class="scale-100 p-6 bg-teal-400 rounded-lg shadow-2xl flex items-center motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2">
    <div class="h-16 w-16 p-3 bg-red-50 flex items-center justify-center rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        Profile
    </div>
    <div class="pl-6">
        <h2 class="mt-6 text-xl font-semibold text-gray-900"></h2>

        <p class="mt-4 text-sm leading-relaxed">
            {{ $slot }}
        </p>
    </div>
</a>
