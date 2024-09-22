@extends('welcome')

@section('style')
    <style>
        .heroSection {
            background-color: #191819;
            perspective: 1200px;
            border-radius: 1.17em;
            border: 1px solid;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-left: auto;
            position: relative;
            overflow: hidden;
            animation: hero-section-transaction 1.5s cubic-bezier(.9, 0, .5, 1) .2s;
            animation-fill-mode: forwards;
        }

        @keyframes hero-section-transaction {
            0% {
                width: 0;
            }

            100% {
                width: 100%;
            }
        }

        .program-grid-wrapper {
            transform-style: preserve-3d;
            display: grid;
            grid-column-gap: 2.35em;
            grid-row-gap: 2.35em;
            grid-template-rows: auto;
            grid-template-columns: 1fr 1fr 1fr;
            place-content: center;
            width: 100%;
            position: absolute;
            z-index: 50;
            transform: scale3d(1, 1, 1) rotateX(11deg) rotateY(-11deg) rotateZ(11deg) skew(0deg, 0deg);
            transform-style: preserve-3d;
            transition: transform .5s cubic-bezier(.5, .7, 1, 1), rotate .6s cubic-bezier(.5, .7, 1, 1);
        }

        .lightbox-link {
            perspective: 1200px;
            border-radius: .94em;
            width: 44vw;
            height: 25vw;
            position: relative;
            overflow: hidden;
            max-width: 100%;
            display: inline-block;
        }

        .lightbox-link img {
            z-index: 20;
            border-radius: var(--big-card-corners);
            object-fit: cover;
            width: 100%;
            height: 100%;
            position: absolute;
            inset: 0%;
        }

        @keyframes hero-section-box-img-transaction {
            0% {
                transform: translate3d(-100%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
            }

            100% {
                transform: translate3d(0%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
            }
        }

        .lightbox-link:nth-child(1) {
            grid-area: 1 / 1 / 2 / 2;
        }

        .lightbox-link:nth-child(2) {
            grid-area: 1 / 2 / 2 / 3;
        }

        .lightbox-link:nth-child(3) {
            grid-area: 1 / 3 / 2 / 4;
        }

        .lightbox-link:nth-child(4) {
            grid-area: 2 / 1 / 3 / 2;
        }

        .lightbox-link:nth-child(5) {
            grid-area: 2 / 2 / 3 / 3;
        }

        .lightbox-link:nth-child(6) {
            grid-area: 2 / 3 / 3 / 4;
        }

        .lightbox-link:nth-child(7) {
            grid-area: 3 / 1 / 4 / 2;
        }

        .lightbox-link:nth-child(8) {
            grid-area: 3 / 2 / 4 / 3;
        }

        .lightbox-link:nth-child(9) {
            grid-area: 3 / 3 / 4 / 4;
        }
    </style>
@endsection

@section('content')
    <section class="home-background w-full min-h-screen lg:grid lg:grid-cols-[1.25fr_2fr] relative z-10">
        <div class="min-h-screen grid items-end p-[1.7em] overflow-hidden">
            <div class="hero-content-transition md:w-[500px] lg:w-full p-[0_0.6em_1em] lg:mb-[4em]">
                <h1 class="text-white text-[7vw] md:text-[3.3rem] lg:text-[3.7rem] leading-[1.14em] font-semibold">We’re
                    Changing The Education System Forever.</h1>
                <p class="text-white/50 text-lg max-w-[350px] leading-8 py-3">Practical education that gives you all the
                    tools you need to thrive in the digital age.</p>
                <a href="#"
                    class="hero-button-transition inline-block text-[0.98em] bg-[#e6e6e6] hover:text-[#e6e6e6] hover:bg-[#e6e6e699] rounded-2xl py-[0.9em] px-[1.8em] leading-[1.4em] tracking-[1px] font-semibold">SEE
                    ALL PROGRAMS</a>
            </div>
        </div>
        <div class="heroSection my-[.7em] hidden lg:flex">
            <div class="program-grid-wrapper">
                <a href="#" class="lightbox-link relative group">
                    <img src="{{ asset('images/hero/9.png') }}" alt="">
                    <div
                        class="mt-3 absolute bottom-0 left-5 z-50 bg-[#2d2c2d80] backdrop-blur-2xl p-[.9em_2.5em_.9em_1.1em] rounded-[.76em] transform transition-all opacity-0 group-hover:opacity-100 group-hover:-translate-y-6 duration-300">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
                <a href="#" class="lightbox-link relative group">
                    <img src="{{ asset('images/hero/5.png') }}" alt="">
                    <div
                        class="mt-3 absolute bottom-0 left-5 z-50 bg-[#2d2c2d80] backdrop-blur-2xl p-[.9em_2.5em_.9em_1.1em] rounded-[.76em] transform transition-all opacity-0 group-hover:opacity-100 group-hover:-translate-y-6 duration-300">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
                <a href="#" class="lightbox-link relative group">
                    <img src="{{ asset('images/hero/2.png') }}" alt="">
                    <div
                        class="mt-3 absolute bottom-0 left-5 z-50 bg-[#2d2c2d80] backdrop-blur-2xl p-[.9em_2.5em_.9em_1.1em] rounded-[.76em] transform transition-all opacity-0 group-hover:opacity-100 group-hover:-translate-y-6 duration-300">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
                <a href="#" class="lightbox-link relative group">
                    <img src="{{ asset('images/hero/3.png') }}" alt="">
                    <div
                        class="mt-3 absolute bottom-0 left-5 z-50 bg-[#2d2c2d80] backdrop-blur-2xl p-[.9em_2.5em_.9em_1.1em] rounded-[.76em] transform transition-all opacity-0 group-hover:opacity-100 group-hover:-translate-y-6 duration-300">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
                <a href="#" class="lightbox-link relative group">
                    <img src="{{ asset('images/hero/7.png') }}" alt="">
                    <div
                        class="mt-3 absolute bottom-0 left-5 z-50 bg-[#2d2c2d80] backdrop-blur-2xl p-[.9em_2.5em_.9em_1.1em] rounded-[.76em] transform transition-all opacity-0 group-hover:opacity-100 group-hover:-translate-y-6 duration-300">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
                <a href="#" class="lightbox-link relative group">
                    <img src="{{ asset('images/hero/6.png') }}" alt="">
                    <div
                        class="mt-3 absolute bottom-0 left-5 z-50 bg-[#2d2c2d80] backdrop-blur-2xl p-[.9em_2.5em_.9em_1.1em] rounded-[.76em] transform transition-all opacity-0 group-hover:opacity-100 group-hover:-translate-y-6 duration-300">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
                <a href="#" class="lightbox-link relative group">
                    <img src="{{ asset('images/hero/8.png') }}" alt="">
                    <div
                        class="mt-3 absolute bottom-0 left-5 z-50 bg-[#2d2c2d80] backdrop-blur-2xl p-[.9em_2.5em_.9em_1.1em] rounded-[.76em] transform transition-all opacity-0 group-hover:opacity-100 group-hover:-translate-y-6 duration-300">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
                <a href="#" class="lightbox-link relative group">
                    <img src="{{ asset('images/hero/1.png') }}" alt="">
                    <div
                        class="mt-3 absolute bottom-0 left-5 z-50 bg-[#2d2c2d80] backdrop-blur-2xl p-[.9em_2.5em_.9em_1.1em] rounded-[.76em] transform transition-all opacity-0 group-hover:opacity-100 group-hover:-translate-y-6 duration-300">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
                <a href="#" class="lightbox-link relative group">
                    <img src="{{ asset('images/hero/4.png') }}" alt="">
                    <div
                        class="mt-3 absolute bottom-0 left-5 z-50 bg-[#2d2c2d80] backdrop-blur-2xl p-[.9em_2.5em_.9em_1.1em] rounded-[.76em] transform transition-all opacity-0 group-hover:opacity-100 group-hover:-translate-y-6 duration-300">
                        <h3 class="text-[#e6e6e6] font-bold">Digital Launchpad</h3>
                        <span class="text-[#e6e6e680] font-bold text-[14.5px]">Iman Gadzhi</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        class El {
            constructor(containerSelector) {
                this.container = document.querySelector(containerSelector);
                this.heroSection = document.querySelector('.heroSection');
            }

            moveGrid() {
                const self = this;

                self.heroSection.addEventListener('mousemove', (e) => {
                    const rect = self.heroSection.getBoundingClientRect();
                    const mouseX = e.clientX - rect.left;
                    const mouseY = e.clientY - rect.top;

                    const containerWidth = self.heroSection.offsetWidth;
                    const containerHeight = self.heroSection.offsetHeight;

                    const moveX = -1 * ((mouseX / containerWidth) - 0.5) * 2 * 70;
                    const moveY = -1 * ((mouseY / containerHeight) - 0.5) * 2 * 30;

                    gsap.to(self.container, {
                        x: moveX + '%',
                        y: moveY + '%',
                        rotationX: 0,
                        rotationY: 0,
                        rotateZ: 0,
                        duration: 1.5,
                        ease: 'power2.out',
                    });
                });
                self.heroSection.addEventListener('mouseleave', () => {
                    gsap.to(self.container, {
                        x: 0,
                        y: 0,
                        rotationX: 11,
                        rotationY: -11,
                        rotateZ: 11,
                        duration: 1.5,
                        ease: 'power2.out',
                    });
                });
            }
        }

        const el = new El('.program-grid-wrapper');
        el.moveGrid();
    </script>
@endsection
