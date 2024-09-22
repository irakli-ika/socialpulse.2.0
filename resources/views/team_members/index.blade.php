@extends('welcome')
@section('content')
    <section class="w-full mx-auto pt-[5em] px-[1.2em] md:px-[2.2em] relative z-20">
        <div class="flex items-center justify-center w-full mt-2 mb-10 md:mt-10">
            <div class="bg-[#47474780] rounded-xl py-[6px] px-[6px] flex items-center justify-center gap-2">
                <button class="px-[20px] py-[12px] rounded-lg bg-[#00000047] hover:bg-[#0006] duration-200">
                    <img src="{{ asset('images/logos/1.webp') }}" alt="" class="w-[120px] block">
                </button>
                <button
                    class="px-[20px] py-[12px] text-white font-bold text-xl rounded-lg hover:bg-[#0006] duration-200">
                    Coming Soon
                </button>
            </div>
        </div>
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full gap-4 md:gap-x-8 lg:gap-y-10 justify-center items-center place-content-center">
            <div>
                <a href="{{ route('teamMembers.show', 1) }}">
                    <div class="hover:-translate-y-1 duration-200">
                        <img src="{{ asset('images/hero/4.webp') }}" alt="" class="block w-full rounded-2xl">
                    </div>
                    <div class="mt-3">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('teamMembers.show', 1) }}">
                    <div class="hover:-translate-y-1 duration-200">
                        <img src="{{ asset('images/hero/1.webp') }}" alt="" class="block w-full rounded-2xl">
                    </div>
                    <div class="mt-3">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('teamMembers.show', 1) }}">
                    <div class="hover:-translate-y-1 duration-200">
                        <img src="{{ asset('images/hero/2.webp') }}" alt="" class="block w-full rounded-2xl">
                    </div>
                    <div class="mt-3">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('teamMembers.show', 1) }}">
                    <div class="hover:-translate-y-1 duration-200">
                        <img src="{{ asset('images/hero/3.webp') }}" alt="" class="block w-full rounded-2xl">
                    </div>
                    <div class="mt-3">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('teamMembers.show', 1) }}">
                    <div class="hover:-translate-y-1 duration-200">
                        <img src="{{ asset('images/hero/5.webp') }}" alt="" class="block w-full rounded-2xl">
                    </div>
                    <div class="mt-3">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('teamMembers.show', 1) }}">
                    <div class="hover:-translate-y-1 duration-200">
                        <img src="{{ asset('images/hero/6.webp') }}" alt="" class="block w-full rounded-2xl">
                    </div>
                    <div class="mt-3">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
