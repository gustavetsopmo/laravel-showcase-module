@extends('showcase::layouts.master')
@section('title', 'Services')
@php
$items = [
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

@section('content')
<x-showcase::header-section title="Nos Services" subTitle="" />
    <section class="section">
        <div class="absolute z-[1] w-[15%] h-[80%] bottom-40 -left-40 sky-gradient"></div>
        <div class="absolute z-[0] w-[10%] h-[20%] -left-0 bottom-20 opacity-50 blue-gradient"></div>
        <div
            class="bg-[url({{ asset('/assets/small-design.png') }})] bg-no-repeat bg-right absolute opacity-25 -right-20 inset-0 z-0">
        </div>
        <div class="padding-y max-w-7xl padding-x mx-auto relative">
            <div class="flex flex-col items-center">

                <div class="blue-bar mt-3"></div>

                <div
                    class="flex mt-4 md:mt-12 flex-wrap flex-col md:gap-x-6 md:grid md:grid-cols-3 justify-between md:flex-row">
                    @forelse ($items as $item)
                        <x-showcase::animated-card class="flex flex-col items-center text-center" :title="$item['title']"
                            :description="$item['description']">
                            <div class="text-center">
                                <x-slot:svgIcon class="flex justify-center">
                                    {{ $item['icon'] }}
                                </x-slot:svgIcon>
                            </div>
                        </x-showcase::animated-card>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>

@endsection
