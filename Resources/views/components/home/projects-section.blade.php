<section class="section bg-white relative">
    @php
        $projects = [['title' => 'KEERO Technology Solutions', 'image' => 'assets/KEERO.png', 'link' => 'https://keerotech.com', 'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti impedit tempora eum sequi, velit consequatur. '], ['title' => 'Ficko Market', 'image' => 'assets/KEERO.png', 'link' => 'https://shop.figuil.com', 'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti impedit tempora eum sequi, velit consequatur.'], ['title' => 'Modern Bank website', 'image' => 'assets/KEERO.png', 'link' => 'https://modern-bank.figuil.com', 'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti impedit tempora eum sequi, velit consequatur.']];
    @endphp
    <div class="padding-y padding-x max-w-7xl mx-auto relative z-2">
        <p class="text-sky-500 text-sm uppercase font-medium">Projets realisés</p>
        <h2 class="w-full mt-2 custom-title">
            Nos realisations
        </h2>
        <div class="h-1 w-16 rounded-sm mt-3 mb-8 bg-sky-500"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 md:flex-row pt-10 space-y-6 md:space-y-0 md:space-x-4">
            @forelse ($projects as $project)
                <x-showcase::animated-card  :title="$project['title']" :description="$project['description']">
                    <x-slot:link>
                        <a href="https://figuil.com" target="_blank" class="stretched-link mt-4 text-sky-500">Consulter</a>
                    </x-slot:link>
                    <x-slot:image>
                        {{$project['image']}}
                    </x-slot:image>
                </x-showcase::animated-card>
            @empty
            @endforelse
        </div>
        <p class="pt-20 flex justify-center">
            <a href="{{route('/')}}" class="button button-sky">Voir plus de realisations</a>
        </p>
    </div>
    <div class="absolute z-[1] w-[20%] h-[80%] bottom-40 opacity-30 -right-10 sky-gradient"></div>
    <div class="absolute z-[0] w-[10%] h-[50%] -right-10 bottom-20 opacity-50 sky-gradient"></div>

</section>
