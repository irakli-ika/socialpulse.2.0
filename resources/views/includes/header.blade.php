<header class="w-full relative">
    <div class="w-[150px] fixed top-10 left-9 z-50">
        <a href="#">
            <img src="{{ asset('images/logos/logo.webp') }}" alt="logo.webp" class="block w-full">
        </a>
    </div>
    <nav class="fixed top-6 right-6 z-50">
        {{-- Mobile --}}
        <div class="md:hidden">
            <button id="hamburger-btn" class="rounded-full bg-[#47474780] backdrop-blur-2xl p-3.5 focus:bg-[#2d2c2dcc]">
                <svg class="w-5 h-5 stroke-white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 18L20 18" stroke-width="2" stroke-linecap="round" />
                    <path d="M4 12L20 12" stroke-width="2" stroke-linecap="round" />
                    <path d="M4 6L20 6" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
        </div>
        {{-- Pc --}}
        <ul
            class="hidden md:flex md:items-center md:gap-1 p-[0.35em] rounded-[0.76em] bg-[#47474780] backdrop-blur-2xl">
            <li><a href="{{ route('home') }}"
                    class="nav-link inline-block rounded-lg {{ request()->routeIs('home') ? 'bg-[#0003]' : '' }} hover:bg-[#0006] p-[1.05em_1em] font-semibold text-white text-[13.5px] leading-[1.1em] duration-[.3s]">Home</a>
            </li>
            <li><a href="#"
                    class="nav-link inline-block rounded-lg hover:bg-[#0006] p-[1.05em_1em] text-white font-semibold text-[13.5px] leading-[1.1em] duration-[.3s]">About
                    Us</a></li>
            <li><a href="{{ route('teamMembers.index') }}"
                    class="nav-link inline-block rounded-lg {{ request()->routeIs('teamMembers.index') ? 'bg-[#0003]' : '' }} hover:bg-[#0006] p-[1.05em_1em] text-white font-semibold text-[13.5px] leading-[1.1em] duration-[.3s]">Team
                    members</a></li>
            <li><a href="#"
                    class="nav-link inline-block rounded-lg hover:bg-[#0006] p-[1.05em_1em] text-white font-semibold text-[13.5px] leading-[1.1em] duration-[.3s]">Our
                    Mission</a></li>
            <li><a href="#"
                    class="nav-link inline-block rounded-lg hover:bg-[#0006] p-[1.05em_1em] text-white font-semibold text-[13.5px] leading-[1.1em] duration-[.3s]">Career</a>
            </li>
            <li><a href="#"
                    class="nav-link inline-block rounded-lg hover:bg-[#0006] p-[1.05em_1em] text-white font-semibold text-[13.5px] leading-[1.1em] duration-[.3s]">Contact
                    Us</a></li>
        </ul>
    </nav>
    <div class="md:hidden absolute left-0 top-28 w-full z-30 flex justify-center overflow-hidden prevent-default-none" style="display: none;" id="hamburger_container">
        <ul id="hamburger"
            class="flex flex-col w-full text-sm mx-2 p-1.5 rounded-xl backdrop-blur-2xl bg-[#47474780] text-[#e6e6e6]">
            <li><a href="#"
                    class="nav-link block px-4 font-semibold py-3.5 rounded-lg bg-[#0003] hover:bg-[#0006] duration-[.3s]">Home</a>
            </li>
            <li><a href="#"
                    class="nav-link block px-4 font-semibold py-3.5 rounded-lg hover:bg-[#0006] duration-[.3s]">Programs</a>
            </li>
            <li><a href="#"
                    class="nav-link block px-4 font-semibold py-3.5 rounded-lg hover:bg-[#0006] duration-[.3s]">Our
                    Mission</a></li>
            <li><a href="#"
                    class="nav-link block px-4 font-semibold py-3.5 rounded-lg hover:bg-[#0006] duration-[.3s]">Career</a>
            </li>
            <li><a href="#"
                    class="nav-link block px-4 font-semibold py-3.5 rounded-lg hover:bg-[#0006] duration-[.3s]">Student
                    Login</a></li>
        </ul>
    </div>
</header>
<div id="overlay" class="overlay hidden absolute top-0 left-0 w-full h-full z-20 cursor-pointer"></div>
