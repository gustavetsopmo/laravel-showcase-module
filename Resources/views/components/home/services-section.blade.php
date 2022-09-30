<section class="section bg-light-gradient relative overflow-hidden">
    @php
        $services = [
            [
                'title' => 'Développement Web',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Animi, quod inventore! In dolorem',
                'icon' => 'assets/services/web-developement.png',
            ],
            [
                'title' => 'Marketing Digital',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Animi, quod inventore! In dolorem',
                'icon' => 'assets/services/digital-marketing.png',
            ],
            [
                'title' => 'Infographie',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Animi, quod inventore! In dolorem',
                'icon' => 'assets/services/infography.png',
            ],
        ];
    @endphp
    <div class="bg-[url({{asset('/assets/small-design.png')}})] bg-no-repeat bg-right absolute opacity-30 -right-20 inset-0 z-0">
    </div>
    <div class="padding-x max-w-7xl custom-padding mx-auto relative z-10">
        <div class="flex flex-col-reverse md:flex-row">
            <div class="w-full md:w-1/2 pt-10 md:pt-0 self-center relative">
                <img data-src="{{ asset('assets/NosServices.png') }}" width="576px" height="441px" alt="Services"
                    class="md:w-[90%] md:h-[90%] relative z-[5] animate-up-down lazy" />
                <div class="absolute z-[1] w-[80%] h-[80%] bottom-40 -left-40 sky-gradient"></div>
                <div class="absolute z-[0] w-[50%] h-[50%] -left-0 bottom-20 opacity-50 blue-gradient"></div>
            </div>
            <div class="justify-center md:items-center w-full md:w-1/2">
                <p class="text-sm uppercase text-blue-500/50">
                    Que proposons nous?
                </p>
                <h2 class="w-full mt-2 custom-title">Nos services</h2>
                <div class="h-1 w-16 rounded-sm mt-3 bg-sky-500"></div>
                <p class="md:mb-10 mb-2 mt-3 leading-tight text-p font-light">
                    Our solutions to make you an expert and ensure you get consistent
                    jobs and salaries
                </p>
                <div class="flex flex-col mt-10 space-y-6">
                    @forelse ($services as $service)
                        <div class="flex items-start hover:bg-sky-900/10 rounded-md p-2">
                                <img data-src={{ asset($service['icon']) }} height="44px" width="44px" class="lazy object-cover h-[44px] w-[44px]"
                                alt="{{ $service['title'] }}" />
                            <div class="pl-4">
                                <p class="text-blue-500 font-bold text-xl mb-2">
                                    {{ $service['title'] }}
                                </p>
                                <p class="text-p">
                                    {{ $service['description'] }}
                                </p>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
