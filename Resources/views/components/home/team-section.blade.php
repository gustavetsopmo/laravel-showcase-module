<section class="section relative bg-light-gradient">
    @php
        $teamMembers = [
            ['name' => 'Gustave TSOPMO', 'avatar' => 'assets/team/Portraitorange.png', 'role' => 'Web Developer', 'about' => "With over 5 years of combined experience, we've got a well-seasoned team at the helm.", 'socials' => [
                ['name' => 'Facebook', 'icon' => 'assets/socials/facebook.svg', 'link' => 'https://facebook.com/'],
                ['name' => 'Twitter', 'icon' => 'assets/socials/twitter.svg', 'link' => 'https://twitter.com/'],
                ['name' => 'Youtube', 'icon' => 'assets/socials/youtube.svg', 'link' => 'https://youtube.com/'],
            ]],
            ['name' => 'Bruno MAFFO', 'avatar' => 'assets/team/Portraitorange.png', 'role' => 'Web Developer', 'about' => "With over 5 years of combined experience, we've got a well-seasoned team at the helm.", 'socials' => [
                ['name' => 'Facebook', 'icon' => 'assets/socials/facebook.svg', 'link' => 'https://facebook.com/'],
                ['name' => 'Twitter', 'icon' => 'assets/socials/twitter.svg', 'link' => 'https://twitter.com/'],
                ['name' => 'Youtube', 'icon' => 'assets/socials/youtube.svg', 'link' => 'https://youtube.com/'],
            ]],
            ['name' => 'Donald Njiegnam', 'avatar' => 'assets/team/Portraitorange.png', 'role' => 'Web Developer', 'about' => "With over 5 years of combined experience, we've got a well-seasoned team at the helm.", 'socials' => [
                ['name' => 'Facebook', 'icon' => 'assets/socials/facebook.svg', 'link' => 'https://facebook.com/'],
                ['name' => 'Twitter', 'icon' => 'assets/socials/twitter.svg', 'link' => 'https://twitter.com/'],
                ['name' => 'Youtube', 'icon' => 'assets/socials/youtube.svg', 'link' => 'https://youtube.com/'],
            ]],
            ['name' => 'Alban NGOUNE', 'avatar' => 'assets/team/Portraitorange.png', 'role' => 'Web Developer', 'about' => "With over 5 years of combined experience, we've got a well-seasoned team at the helm.", 'socials' => [
                ['name' => 'Facebook', 'icon' => 'assets/socials/facebook.svg', 'link' => 'https://facebook.com/'],
                ['name' => 'Twitter', 'icon' => 'assets/socials/twitter.svg', 'link' => 'https://twitter.com/'],
                ['name' => 'Youtube', 'icon' => 'assets/socials/youtube.svg', 'link' => 'https://youtube.com/'],
            ]],
    ];
    @endphp
    <div class="absolute z-[1] w-[10%] h-[80%] bottom-40 opacity-40 -left-10 sky-gradient"></div>
    {{-- <div class="absolute z-[0] w-[10%] h-[50%] -left-5 bottom-20 opacity-40 sky-gradient"></div> --}}
    <div class="absolute z-[2] w-[5%] h-[30%] -left-5 bottom-20 opacity-50 pink-gradient"></div>
    <!-- Meet the Team -->
    <div class="padding-y padding-x max-w-7xl mx-auto relative z-20">
        <!-- Section Header -->
        <div class="flex flex-wrap justify-start text- mb-24">
            <div class="w-full lg:w-6/12">
                <!-- Header -->
                <h2 class="custom-title mb-8">
                    Notre Équipe
                </h2>

                <!-- Description -->
                <p class="text-gray-700 text-lg font-light">
                    With over 5 years of combined experience, we've got a well-seasoned team at the helm.
                </p>
            </div>
        </div>

        <!-- Team Members -->
        <div class="grid grid-cols-1 md:grid-cols-4 md:space-x-4">
            <!-- Member Item -->
            @forelse ($teamMembers as $member)
            <x-showcase::team-card  :name="$member['name']" :role="$member['role']" :about="$member['about']" :avatar="$member['avatar']" :socials="$member['socials']" />
            @empty
            @endforelse
        </div>
    </div>
</section>
