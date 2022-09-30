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
    <div {{ $attributes->merge(['class' => 'relative z-10']) }}>
        @if (isset($icon))
            <div class="flex ">
                <img data-src="{{ asset($icon) }}" width="60px" height="60px"
                    class="lazy rounded-full h-[60px] w-[60px] float-left object-cover" alt="Image">
            </div>
        @elseif (isset($svgIcon))
            <div class="flex">
                <img data-src="{{ asset($svgIcon) }}" width="50px" height="50px" class="lazy h-[50px] w-[50px] float-left"
                    alt="Image">
            </div>
        @else
            @if (isset($image))
                <div class="overflow-hidden mb-3">
                    <img data-src="{{ asset($image) }}" width="387px" height="194px" class="lazy rounded-md object-cover"
                        alt="Image">
                </div>
            @endif
        @endif
        <p class="font-extrabold pb-3 md:pb-6 text-xl md:text-2xl text-sky-900">
            {{ $title }}
        </p>
        <p class="text-gray-700 text-p">
            {!! $description !!}
        </p>

        {!! $slot !!}

        @isset($link)
            <div class="mt-4">
                {!! $link !!}
            </div>
            @endif
        </div>
    </div>
