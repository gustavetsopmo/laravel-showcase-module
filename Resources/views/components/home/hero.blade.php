<section class="py-12 padding-x bg-sky-900/90">
    <div class="w-full h-full flex items-center max-w-7xl mx-auto justify-between">
        <div class=" md:flex items-center mt-6 md:mt-2 ">
            <div class="w-full md:w-1/2 flex flex-col">
                <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">Better Solutions For Your
                    Business</h1>
                <p class="text-2xl mt-3 font-medium text-gray-400">We are team of talented designers making websites
                    with Bootstrap
                </p>
                {{-- <div class="pt-8 md:mb-0">
                </div> --}}
                <div class="ml-0 lext-left pt-8 hidden md:inline-flex">
                    <x-showcase::button data-bs-toggle="modal" data-bs-target="#contactModalCenter">Nous-contacter</x-showcase::button>
                    <div class="pl-3 flex flex-col justify-between items-start">
                        <span class="text-gray-400 font-medium">Pour tout besoin.</span>
                        <a class='text-white font-bold ' href="tel:+237695705725">Appelez le <span
                                class="text-sky-500">+237 695 705 725</span> </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-2 relative">
                <img data-src="{{ asset('assets/NosServices.png') }}" width="624px" height="478px"
                    class="hidden md:block relative z-10 lazy" alt="Hero">
                <div class="absolute z-[2] w-[80%] h-[80%] bottom-0 opacity-20 -right-0 sky-gradient"></div>
                <div class="absolute z-[0] w-[60%] h-[50%] left-10 bottom-20 opacity-50 sky-gradient"></div>
                <div class="absolute z-[0] w-[10%] h-[20%] left-40 bottom-20 opacity-100 pink-gradient"></div>
            </div>
        </div>
    </div>
    {{-- <div class="-mt-28 -mx-3 md:mx-auto">
        <svg data-name="Section svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 234"><defs><style>.cls-1,.cls-2{fill:#fff;}.cls-1{fill-opacity:0.1;}</style></defs><title>svg-left</title><path class="cls-1" d="M1439,16c-149,0-313,20-721,91C284,182,138,118,0,80V229c122,29,303,44,685-72C1082,35,1274,24,1440,24Z" transform="translate(0 -16)"/><path class="cls-1" d="M1440,21c-204,0-357,17-758,124C296,248,124,208,2,179l-2-1v51c122,29,303,44,685-72C1082,35,1274,24,1440,24Z" transform="translate(0 -16)"/><path class="cls-2" d="M0,229c48,12,105,21,179,21,116,0,274-22,506-93C1082,35,1274,24,1440,24V250H0V229Z" transform="translate(0 -16)"/></svg>
    </div> --}}
</section>
