<header>
    @php
        $navLinks = [['title' => 'Accueil', 'route' => '/'], ['title' => 'A-propos', 'route' => 'a-propos'], ['title' => 'Contact', 'route' => 'contact'], ['title' => 'Services', 'route' => 'services']];
    @endphp
    <nav class="bg-sky-900/90 relative w-full z-50">
        <div class="max-w-7xl padding-x mx-auto flex justify-between  py-4 border-b-[.5px border-blue-300">
            <div class="flex  justify-between  w-full">
                <!-- Logo -->
                <div class="shrink-0 flexitems-center">
                    <a href="{{ route('/') }}">
                        <x-showcase::application-logo class="block h-12 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-6 sm:flex">
                    @foreach ($navLinks as $link)
                        <x-showcase::nav-link :href="route($link['route'])" :active="request()->routeIs($link['route'])">
                            {{ __($link['title']) }}
                        </x-showcase::nav-link>
                    @endforeach
                </div>
            </div>

            <!-- Settings Dropdown -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-showcase::dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex truncate items-center text-sm font-medium text-gray-300 hover:text-sky-500 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-showcase::dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-showcase::dropdown-link>
                            </form>
                        </x-slot>
                    </x-showcase::dropdown>
                </div>
            @else
            @endauth
        </div>
    </nav>
</header>
