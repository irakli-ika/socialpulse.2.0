@extends('welcome')
@section('content')
    <section class="w-full mx-auto pt-[.8em] px-[.8em] relative z-20 text-white">
        <div style="background-image: url('{{ asset('images/hero/4.png') }}'); width: 100%; height: 200px; background-position: center; background-repeat: no-repeat; background-size: cover;"
            class="rounded-3xl min-h-[60vh]"></div>
        {{-- about --}}
        <div class="grid grid-cols-[1fr_4fr] gap-6 mt-20 px-[.8em] w-full max-w-[65em] mx-auto">
            <h3 class="text-[20px] lg:text-3xl font-bold">Instructor</h3>
            <div class="text-[#e6e6e699]">
                <div class="overflow-hidden rounded-3xl w-full max-w-full">
                    <img src="{{ asset('images/hero/4.png') }}" alt=""
                        srcset="{{ asset('images/hero/3.png') }} 800w, {{ asset('images/hero/6.png') }} 1000w"
                        class="block w-full">
                </div>
                <h2 class="text-[23px] lg:text-[2.5em] font-bold text-white py-3 lg:py-4">Iman Gadzhi</h2>
                <p class="leading-8">Iman Gadzhi's Digital Launchpad equips you for success. It tackles common
                    obstacles
                    that hold most people back. Learn Iman's unique 7-minute exercise to jumpstart your journey and develop
                    the
                    right mindset. The program also guides you in choosing the perfect business model for your personality
                    type.
                </p>
                <p class="mt-4 leading-8">Following the foundational training, Iman dives deep into his productivity
                    techniques. Master his "monk
                    mode"
                    strategy for laser focus and peak performance through a detailed breakdown of his daily schedule.
                </p>
            </div>
        </div>

        {{-- skills --}}
        <div class="grid grid-cols-[1fr_4fr] gap-6 mt-20 pt-20 px-[.8em] text-[#e6e6e6] w-full max-w-[65em] mx-auto">
            <h3 class="text-[20px] lg:text-3xl font-bold">Skills</h3>
            <ul class="text-[1.3em] leading-10 md:flex md:flex-wrap md:leading-4 gap-10">
                <li class="text-nowrap">Break Bad Habits</li>
                <li class="text-nowrap">Overcome Roadblocks</li>
                <li class="text-nowrap">Success Mindset</li>
                <li class="text-nowrap">Business Models</li>
                <li class="text-nowrap">Overcome Roadblocks</li>
                <li class="text-nowrap">Success Mindset</li>
                <li class="text-nowrap">Business Models</li>
            </ul>
        </div>

        {{-- portfolio --}}
        <div class="grid grid-cols-[1fr_4fr] gap-6 mt-20 pt-20 px-[.8em] text-[#e6e6e6] w-full max-w-[65em] mx-auto">
            <h3 class="text-[20px] lg:text-3xl font-bold">Skills</h3>
            <div id="faqAccordion">
                <div class="rounded-2xl overflow-hidden mb-5 bg-[#262626] text-[#e6e6e6]">
                    <h2 class="mb-0" id="heading_1">
                        <button
                            class="group text-lg relative flex w-full items-center rounded-t-[15px] border-0 bg-[#262626] px-5 py-6 text-left transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none [&:not([data-te-collapse-collapsed])]:bg-[#262626] [&:not([data-te-collapse-collapsed])]:text-[#e6e6e6] [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                            type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#collapse_1"
                            aria-expanded="false" aria-controls="collapse_1">
                            Module 1 ∙ How To Unf*ck Your Life
                            <span
                                class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapse_1" class="!visible hidden" data-te-collapse-item aria-labelledby="heading_1"
                        data-te-parent="#faqAccordion">
                        <div class="px-5 py-4">
                            This module explores the roadblocks holding you back. Iman outlines five common obstacles and
                            guides you through a 7-minute exercise to break free and jumpstart your journey. He advises
                            avoiding specific business models as a beginner, ensuring you choose the right path.
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden mb-5 bg-[#262626] text-[#e6e6e6]">
                    <h2 class="mb-0" id="heading_2">
                        <button
                            class="group text-lg relative flex w-full items-center rounded-t-[15px] border-0 bg-[#262626] px-5 py-6 text-left transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-[#262626] [&:not([data-te-collapse-collapsed])]:text-[#e6e6e6] [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                            type="button" data-te-collapse-init data-te-collapse-collapsed data-te-target="#collapse_2"
                            aria-expanded="false" aria-controls="collapse_2">
                            Module 1 ∙ How To Unf*ck Your Life
                            <span
                                class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapse_2" class="!visible hidden" data-te-collapse-item aria-labelledby="heading_2"
                        data-te-parent="#faqAccordion">
                        <div class="px-5 py-4">
                            This module explores the roadblocks holding you back. Iman outlines five common obstacles and
                            guides you through a 7-minute exercise to break free and jumpstart your journey. He advises
                            avoiding specific business models as a beginner, ensuring you choose the right path.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
