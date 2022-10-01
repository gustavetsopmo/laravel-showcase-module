<footer class="z-10">
    @php
        $navLinks = [['title' => 'Accueil', 'route' => '/'], ['title' => 'A-propos', 'route' => 'a-propos'], ['title' => 'Contact', 'route' => 'contact'], ['title' => 'Services', 'route' => 'services']];
    @endphp
    <div class="padding-x mx-auto bg-sky-900/90 py-3 text-white">
        <div class="md:flex md:row max-w-7xl mx-auto">
            <div class="w-full md:w-3/12 py-6">
                <div class="relative">
                    <x-showcase::application-logo class="h-12" />
                </div>
            </div>
            <div class="flex flex-col w-full md:w-3/12 items-start py-5 md:text-left">
                <h3 class="text-2xl font-bold">Liens utiles</h3>
                <div class="h-1 w-24 mt-2 mb-3 rounded-sm bg-sky-500"></div>
                <div class="flex flex-col space-y-3">
                    @foreach ($navLinks as $link)
                        <x-showcase::nav-link :href="route($link['route'])" :active="request()->routeIs($link['route'])">
                            {{ __($link['title']) }}
                        </x-showcase::nav-link>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col w-full md:w-3/12 items-start py-5 md:text-left">
                <h3 class=" text-2xl font-bold">Réseaux sociaux</h3>
                <div class="h-1 w-24 mt-2 mb-3 rounded-sm bg-sky-500"></div>
                <div class="flex justify-start space-x-4 md:space-x-4 w-full mt-5 space-y-3">
                    {{-- {socialMedias &&
              socialMedias.map(social => (
                <a
                  key={social.id}
                  href={social.url}
                  target="_blank"
                  data-bs-toggle="tooltip"
                  title={social.username ? social.username : social.name}
                  class="w-6 lg:w-8 h-6 lg:h-8 hover:!text-sky-500 transition duration-150 ease-in-out"
                >
                  {parse(social.icon)}
                </a>
              ))} --}}
                </div>
            </div>
            <div class="flex md:px-10 flex-col w-full md:w-3/12 items-start py-5 md:text-lef">
                <h3 class="text-2xl font-bold">Nos contacts</h3>
                <div class="h-1 w-24 mt-2 mb-3 rounded-sm bg-sky-500"></div>
                <div class="flex flex-wrap md:flex-col">
                    <span class="text-md mt-3 hover:text-blue-300 duration-300 flex items-center space-x-2">
                        <a href="tel:+237595705725" class="hover:text-sky-500">
                            +237 695 705 725
                        </a>
                    </span>
                    <span class="text-md mt-3 hover:text-blue-300 duration-300 flex items-center space-x-2">
                        <a href="mailto:contact@figuil.com" class="hover:text-sky-500">
                            contact@figuil.com
                        </a>
                    </span>
                    <span class="text-md mt-3 hover:text-blue-300 duration-300 flex items-center space-x-2">
                        {{-- <img class='h-[20px] w-[20px]' src={location} alt="Localisation" /> {' '} --}}
                        <a href="mailto:contact@figuil.com" class="hover:text-sky-500">
                            Yaoundé, En face de Camtel Nkomo
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full mx-auto p-3 md:p-4 bg-sky-900">
        <span class="text-center flex justify-center items-center text-gray-400">
            <svg width="25" height="16" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.5 24.2188C7.11484 24.2188 2.73438 19.8375 2.73438 14.4531C2.73438 9.06875 7.11523 4.6875 12.5 4.6875C17.8852 4.6875 22.2656 9.06875 22.2656 14.4531C22.2656 19.8375 17.8848 24.2188 12.5 24.2188ZM12.5 6.64023C8.1918 6.64023 4.68711 10.1449 4.68711 14.4531C4.68711 18.7605 8.19141 22.2652 12.5 22.2652C16.8078 22.2652 20.3121 18.7605 20.3121 14.4531C20.3117 10.1449 16.8074 6.64023 12.5 6.64023Z"
                    fill="#9ca3af" />
                <path
                    d="M9.92715 17.4465C10.2889 17.83 10.7213 18.1401 11.2006 18.3598C11.6898 18.5845 12.2224 18.6992 12.7607 18.6957C13.4439 18.6957 14.0709 18.5328 14.6424 18.207C15.2057 17.8884 15.6857 17.4411 16.0432 16.9016L17.4353 17.9426C16.9064 18.6647 16.2192 19.2561 15.4264 19.6715C14.6209 20.0988 13.7318 20.3125 12.7604 20.3125C11.96 20.3125 11.2076 20.1578 10.5037 19.8477C9.81566 19.5501 9.19079 19.1238 8.6627 18.5918C8.13537 18.0566 7.71438 17.4262 7.42207 16.734C7.11777 16.0254 6.96582 15.2641 6.96582 14.4527C6.96582 13.6422 7.11777 12.8816 7.42207 12.1711C7.71407 11.4792 8.1351 10.8493 8.6627 10.3148C9.19082 9.78245 9.81566 9.35568 10.5037 9.05742C11.208 8.74883 11.9604 8.59375 12.7604 8.59375C13.7318 8.59375 14.6205 8.80742 15.4264 9.23516C16.2197 9.64991 16.907 10.2414 17.4353 10.9641L16.0432 12.0035C15.6851 11.4648 15.2053 11.018 14.6424 10.6992C14.0709 10.3738 13.4439 10.2109 12.7607 10.2109C12.2224 10.2073 11.6897 10.3219 11.2006 10.5469C10.7212 10.7664 10.2888 11.0765 9.92715 11.4602C9.56465 11.843 9.27637 12.2926 9.0627 12.8043C8.84902 13.316 8.74238 13.8664 8.74238 14.4527C8.74238 15.0402 8.84902 15.5898 9.0627 16.102C9.27637 16.6141 9.56465 17.0621 9.92715 17.4465Z"
                    fill="#9ca3af" />
            </svg>
            2022, Figuil Corporation
        </span>
    </div>
</footer>
