<div class="p-3 rounded-md relative group">
    <div
        class="absolute rounded-md group-hover:rotate-2 group-hover:transition ease-in-out delay-150 duration-300 z-[1] group-hover:bg-sky-900 inset-0">
    </div>
    <div
        class="absolute rounded-md group-hover:-rotate-2 group-hover:transition ease-in-out delay-150 duration-300 z-[2] group-hover:bg-sky-500 inset-0">
    </div>
    <div
        class="absolute rounded-md z-[4] group-hover:transition ease-in-out delay-75 duration-700 shadow-none group-hover:bg-white inset-0">
    </div>
    <div class="relative z-10 px-4">
        <div class="flex mb-3">
            <img src="{{ asset($avatar) }}" width="60px" height="60px" class="rounded-full h-[60px] w-[60px] float-left object-cover" alt="Image"
                title={{ $name }} />
        </div>
        <p class="text-gray-700 font-light uppercase">
            {{ $role }}
        </p>
        <p class="font-medium pb-3 md:pb-4 text-sky-900">
            {{ $name }}
        </p>
        <p class="text-gray-700">
            {{ $about }}
        </p>

        <div class="mt-3 flex space-x-3">
            @forelse ($socials as $social)
                <a href="{{$social['link']}}" target="_blank" class="rounded-full p-1 border hover:bg-sky-500/40 hover:text-sky-50 border-sky-500">
                    <img src="{{$social['icon']}}" alt="{{$social['name']}}" width="20px" height="20px" class="w-[20px] h-[20px]">
                </a>
            @empty

            @endforelse
        </div>
        {{ $slot }}

    </div>
</div>
